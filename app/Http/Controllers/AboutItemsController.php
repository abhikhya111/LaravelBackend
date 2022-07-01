<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutItems;
use App\Models\Products;

class AboutItemsController extends Controller
{
    public function getAboutOfItems($id)
    {
        return 'hi';
        $aboutItems = AboutItems::where('product_id','=',$id)->get();
        return $aboutItems;
    }

    public function listAboutItems()
    {
        $products = Products::all();
        return view('about.listAboutItem',compact('products'));
    }

    public function getAboutItems($id)
    {
        $product = Products::find($id);
        $product_id = $product->id;
        $product_name = $product->name;

        $aboutItems = AboutItems::where('product_id','=',$id)->get();
        return view('about.showAboutItem', compact('aboutItems','product_id','product_name'));
    }
}
