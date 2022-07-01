<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Category;
use App\Models\Products;
class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['id','category_id','name','slug','desc','image', 'metaTitle','metaDesc','metaDesc','metaKeyword'];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
        return $this->hasMany(Products::class, 'subcategory_id');
    }
    

}

