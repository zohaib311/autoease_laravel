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
        return redirect('admin/product');


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


    public function getById($id)
    {
        $shrt = Shirt::findOrFail($id);
        return $shrt;
    }

    public function delete($id)
    {
        $shrt = Shirt::findOrFail($id);
        $shrt->delete();
        return 'Item deleted successfully';
    }

    public function update($id)
    {
        $shrt = Shirt::findOrFail($id);
        $shrt->name = 'Classic Black Hoodie';
        $shrt->description = 'Premium black Hoodie for casuel wear';
        $shrt->price = '1500';
        $shrt->discount_price = '1200';
        $shrt->category = 'casuel';
        $shrt->in_stock = '3';
        $shrt->update();

        return 'Updated successfully';
    }
}
