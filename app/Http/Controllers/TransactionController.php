<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['cashier'])->orderBy('transaction_date', 'desc')->get();
        return view('admin.transactions', compact('transactions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'items' => 'required|array|min:1',
            'items.*.inventory_id' => 'required|exists:inventories,id',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.unit_price' => 'required|numeric|min:0',
            'items.*.total_price' => 'required|numeric|min:0',
            'items.*.options' => 'nullable|string',
            'subtotal' => 'required|numeric|min:0',
            'tax' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
            'payment_method' => 'required|string|in:cash,card,digital_wallet',
            'table_number' => 'nullable|string',
            'order_number' => 'nullable|string',
        ]);

        try {
            DB::beginTransaction();

            // Create main transaction
            $transaction = Transaction::create([
                'id' => (string) Str::uuid(),
                'invoice_number' => 'LRPS' . random_int(100000, 999999),
                'cashier_id' => Auth::id(),
                'subtotal' => $validated['subtotal'],
                'tax' => $validated['tax'],
                'total_price' => $validated['total'],
                'payment_method' => $validated['payment_method'],
                'table_number' => $validated['table_number'] ?? null,
                'order_number' => $validated['order_number'] ?? null,
                'is_paid' => true,
                'transaction_date' => now(),
            ]);

            // Create transaction items and update inventory stocks
            foreach ($validated['items'] as $item) {
                TransactionItem::create([
                    'id' => (string) Str::uuid(),
                    'transaction_id' => $transaction->id,
                    'inventory_id' => $item['inventory_id'],
                    'quantity' => $item['quantity'],
                    'unit_price' => $item['unit_price'],
                    'total_price' => $item['total_price'],
                    'options' => $item['options'] ?? null,
                ]);

                // Update inventory stock
                $inventory = Inventory::find($item['inventory_id']);
                $inventory->stocks -= $item['quantity'];
                $inventory->save();
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Transaction completed successfully.',
                'transaction_id' => $transaction->id,
                'invoice_number' => $transaction->invoice_number
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Transaction failed: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show(Transaction $transaction)
    {
        $transaction->load(['cashier', 'transactionItems.inventory']);
        return view('transactions.show', compact('transaction'));
    }
}
