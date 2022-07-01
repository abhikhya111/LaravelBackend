<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Products;
// use App\Models\Specifications;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory()
    {
        $category = Category::all();
        return $category;
    }

    public function listCategory()
    {
        $data['categories'] = Category::all();
        return view('categories.listCategory',$data);
    }

    public function createCategory()
    {
        return view('categories.createCategory');
    }

    public function storeCategory(Request $request)
    {
        $category = new Category;
        $category->id = $request->id;
        $category->name = $request->name;
        $category->desc = $request->desc;
        $category->slug = $request->slug;
        $category->metaTitle = $request->metaTitle;
        $category->metaDesc = $request->metaDesc;
        $category->metaKeyword = $request->metaKeyword;
        $category->image='test';
        $category->save(); 
        return redirect('/api/listCategory');   
    }

    public function editCategory($id)
    {
        $category =  Category::find($id);
        return view('categories.editCategory',compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->id = $request->id;
        $category->name = $request->name;
        $category->desc = $request->desc;
        $category->slug = $request->slug;
        $category->metaTitle = $request->metaTitle;
        $category->metaDesc = $request->metaDesc;
        $category->metaKeyword = $request->metaKeyword;
        $category->image='test';
        $category->save(); 
        return redirect()->route('/api/listCategory')
        ->with('success','Category Has Been updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
        ->with('success','Category has been deleted successfully');
    }

    public function getCategories()
    {
        $category = Category::all();
        return $category;
    }

    public function getSubCategories($id)
    {
        return $id;

    }
}
