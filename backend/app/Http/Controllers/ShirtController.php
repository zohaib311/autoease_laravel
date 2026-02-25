<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shirt;
use Illuminate\Http\Request;

class ShirtController extends Controller
{
    public function insert()
    {
        $shrt = new Shirt();
        $shrt->name = 'Classic White Shirt';
        $shrt->description = 'Premium cotton white shirt for formal wear';
        $shrt->price = '2000';
        $shrt->discount_price = '1800';
        $shrt->category = 'formal';
        $shrt->in_stock = '5';
        $shrt->save();
        return 'Shirt added successfully!';
    }

    public function get()
    {
        $shrt = Shirt::all();
        return $shrt;
    }

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

        return 'Updated successfully' ;
    }

 
}
