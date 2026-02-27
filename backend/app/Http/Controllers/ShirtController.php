<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shirt;
use Illuminate\Http\Request;

class ShirtController extends Controller
{
    public function insert(Request $request)
    {
        $shirt = new Shirt();
        $shirt->name = $request->name;
        $shirt->description = $request->description;
        $shirt->price = $request->price;
        $shirt->discount_price = $request->discount_price;
        $shirt->category = $request->category;
        $shirt->in_stock = $request->stock;
        $shirt->save();
        return redirect('admin/product')->with('status', [
            'type' => 'success',
            'message' => 'Product Added successfully.'
        ]);;
        // return  print_r($request->only(['name', 'discount_price', "description", "category", "stock"]));
    }

    /**
     * Get Function that will get shirts for both api and blade
     */
    private function getAllShirts()
    {
        return Shirt::all();
    }

    public function get()
    {
        $shirtsData = $this->getAllShirts();
        return view('admin.layout.pages.products', compact('shirtsData'));
    }

    public function getApi()
    {
        return response()->json([
            'success' => true,
            'data' => $this->getAllShirts(),
        ]);
    }

    /**
     * End Get Function
     */


    private function privateDelete($id)
    {
        $shirtsData = Shirt::findOrFail($id);
        return ($shirtsData);
    }

    public function delete($id)
    {
        $shirtsData = $this->privateDelete($id);
        $shirtsData->delete();
        return redirect()->route('products')->with('status', [
            'type' => 'delete',
            'message' => 'Product deleted successfully.'
        ]);;
    }

    public function deleteApi($id)
    {
        $shirtData = $this->privateDelete($id);

        if (!$shirtData) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        $shirtData->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product deleted successfully'
        ], 200);
    }

    public function edit($id)
    {
        $shirt = Shirt::findOrFail($id);
        return view('admin.layout.pages.edit', compact('shirt'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'category' => 'required|string|max:100',
            'stock' => 'required|integer|min:0',
        ]);

        $shirt = Shirt::findOrFail($id);
        $shirt->name = $validated['name'];
        $shirt->description = $validated['description'] ?? null;
        $shirt->price = $validated['price'];
        $shirt->discount_price = $validated['discount_price'] ?? null;
        $shirt->category = $validated['category'];
        $shirt->in_stock = $validated['stock'];
        $shirt->save();

        return redirect()->route('products')->with('status', [
            'type' => 'success',
            'message' => 'Product updated successfully.'
        ]);
    }
}
