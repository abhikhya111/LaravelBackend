<?php

namespace App\Http\Controllers;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{

    public function getSubCategories($id)
    {
        $subCategories = SubCategory::where('category_id','=',$id)->get();
        return $subCategories;
    }

    public function listSubCategory()
    {
        $subCategories = SubCategory::all();
        return view('subcategories.listSubCategory',compact('subCategories'));
    }

    public function createSubCategory()
    {
        return view('subcategories.createSubCategory');
    }

    public function storeSubCategory(Request $request)
    {
        
        $subCategory = new SubCategory;
        $subCategory->id = $request->id;
        $subCategory->name = $request->name;
        $subCategory->desc = $request->desc;
        $subCategory->category_id = $request->category_id;
        $subCategory->slug = $request->slug;
        $subCategory->metaTitle = $request->metaTitle;
        $subCategory->metaDesc = $request->metaDesc;
        $subCategory->metaKeyword = $request->metaKeyword;
        $subCategory->image='test';
        $subCategory->save(); 
        return redirect('/api/listSubCategory');   


    }

    public function editSpecification()
    {
        return 'hi';
    }

   
}
