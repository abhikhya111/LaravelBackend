<?php

namespace App\Http\Controllers;
use App\Models\Specifications;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SpecificationController extends Controller
{
    public function getSpecificationPoints($id)
    {
        $specs = Specifications::where('product_id','=',$id)->get();
        return $specs;
    }


    public function listSpecification()
    {
        $products = Products::all();
        return view('specifications.listSpecification',compact('products'));
    }

    public function getSpecifications($id)
    {
        $product = Products::find($id);
        $product_id = $product->id;
        $product_name = $product->name;

        $specifications = Specifications::where('product_id','=',$id)->get();
        return view('specifications.showSpecification', compact('specifications','product_id','product_name'));
    }

    public function editSpecification($id)
    {
        $product = Products::find($id);
        $product_name = $product->name;
        $specifications = Specifications::where('product_id','=',$id)->get();
        return view('specifications.editSpecifications', compact('specifications','product_name'));
    }

    public function updateSpecifications(Request $request)
    {
        return $request;
    }
}


