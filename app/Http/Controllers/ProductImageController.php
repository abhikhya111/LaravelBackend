<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductImage;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductImageController extends Controller
{
    public function productImages($id)
    {
        $proImages = ProductImage::where('product_id','=',$id)->get();
        $image1 = $proImages[0]['image1'];
        $image2 = $proImages[0]['image2'];
        $image3 = $proImages[0]['image3'];
        $image4 = $proImages[0]['image4'];

        return [$image1,$image2,$image3,$image4];
    }
    public function listProductImages()
    {
        $products = Products::all();
        return view('productimages.listProductImages', compact('products'));
    }

    public function showProductImages($id)
    {
        $productImage = ProductImage::where('product_id','=',$id)->get();
        return view('productImages.showProductImages', compact('productImage'));
    }

    public function removeImage($product_id,$name)
    {
        if($name=='image1')
        {
            DB::table('product_images')
            ->where('product_id',$product_id)
            ->update(['image1' => '']);
        }
        elseif($name=='image2')
        {
            DB::table('product_images')
            ->where('product_id',$product_id)
            ->update(['image2' => '']);
        }
        elseif($name=='image3')
        {
            DB::table('product_images')
            ->where('product_id',$product_id)
            ->update(['image3' => '']);
        }
        elseif($name=='image4')
        {
            DB::table('product_images')
            ->where('product_id',$product_id)
            ->update(['image4' => '']);
        }
        

        

        return redirect('/api/showProductImages/'.$product_id);

        
    }

    public function addImage(Request $request,$product_id,$name)
    {
        if($name=='image1')
        {
            DB::table('product_images')
            ->where('product_id',$product_id)
            ->update(['image1' => $request->img_src]);
        }
        elseif($name=='image2')
        {
            DB::table('product_images')
            ->where('product_id',$product_id)
            ->update(['image2' => $request->img_src]);
        }
        elseif($name=='image3')
        {
            DB::table('product_images')
            ->where('product_id',$product_id)
            ->update(['image3' => $request->img_src]);
        }
        elseif($name=='image4')
        {
            DB::table('product_images')
            ->where('product_id',$product_id)
            ->update(['image4' => $request->img_src]);
        }
        return redirect('/api/showProductImages/'.$product_id);


    }
    
}
