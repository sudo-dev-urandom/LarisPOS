<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['cashier', 'inventory'])->latest()->get();
        return view('transactions.index', compact('transactions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'inventory_id' => 'required|exists:inventories,id',
            'total_price' => 'required|numeric',
            'tax' => 'nullable|numeric',
            'payment_method' => 'required|string',
        ]);

        $transaction = Transaction::create([
            'id' => (string) Str::uuid(),
            'invoice_number' => 'LRPS' . random_int(100000, 999999),
            'cashier_id' => Auth::id(),
            'inventory_id' => $validated['inventory_id'],
            'total_price' => $validated['total_price'],
            'tax' => $validated['tax'] ?? 0,
            'total_price_tax' => ($validated['total_price'] + ($validated['tax'] ?? 0)),
            'payment_method' => $validated['payment_method'],
            'is_paid' => true,
        ]);

        return redirect()->back()->with('success', 'Transaction completed successfully.');
    }
}
