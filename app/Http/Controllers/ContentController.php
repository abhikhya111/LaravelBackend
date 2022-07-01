<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Products;

class ContentController extends Controller
{
    public function listContent()
    {
        $products = Products::all();
        return view('contents.listContent',compact('products'));
    }

    public function getContent($id)
    {
        $product = Products::find($id);
        $product_id = $product->id;
        $product_name = $product->name;
        $contents = Contents::where('product_id','=',$id)->get();
        return view('contents.showContents',compact('contents','product_name','product_id'));
    }

    public function editContents($id)
    {
        $product = Products::find($id);
        $product_id = $product->id;
        $product_name = $product->name;

        $contents = Contents::where('product_id','=',$id)->get();
        return view('contents.editContents', compact('contents','product_id','product_name'));
    }
}
