<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return response()->json(Inventory::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'tags' => 'nullable|string',
            'price' => 'required|numeric',
            'is_available' => 'required|boolean',
            'description' => 'nullable|string',
            'stocks' => 'required|integer',
            'images' => 'nullable|string',
            'discount' => 'nullable|numeric',
        ]);

        $inventory = Inventory::create($data);

        return response()->json($inventory, 201);
    }

    public function show($id)
    {
        return response()->json(Inventory::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->update($request->all());

        return response()->json($inventory);
    }

    public function destroy($id)
    {
        Inventory::findOrFail($id)->delete();

        return response()->json(['message' => 'Deleted']);
    }
}
