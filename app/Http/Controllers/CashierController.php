<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index()
    {
        $cashier = User::where('level', 'cashier')->get();
        return view('admin.cashier', compact('cashier'));
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        return response()->json(User::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $User->update($request->all());

        return response()->json($User);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return response()->json(['message' => 'Deleted']);
    }
}
