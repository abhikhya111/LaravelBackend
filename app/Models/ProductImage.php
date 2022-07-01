<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['id', 'product_id','product_name','image1','image2','image3','image4'];

    use HasFactory;
}
