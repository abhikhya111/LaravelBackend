<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{

    public function getProducts($id)
    {
        $products = Products::where('subcategory_id','=',$id)->get();
        return $products;
    }

    public function listProduct()
    {
        $products = Products::all();
        return view('products.listProduct',compact('products'));
    }

    public function createProduct()
    {
        return view('products.createProduct');
    }

    public function editProduct($id)
    {
        $product = Products::find($id);
        return view('products.editProduct', compact('product'));

    }

    public function storeProduct(Request $request) 
    
    {
        $product = new Products;
        $product->id = $request->id;
        $product->subcategory_id = $request->subcategory_id;
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->slug = $request->slug;
        $product->metaTitle = $request->metaTitle;
        $product->metaDesc = $request->metaDesc;
        $product->metaKeyword = $request->metaKeyword;
        $product->image='test';
        $product->save(); 
        return redirect('/api/listProduct');
    }
}


