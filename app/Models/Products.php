<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['subcategory_id','name','image','slug','desc','metaTitle','metaDesc','metaKeyword'];

    public function sub_category()
    {
        return $this->hasMany(SubCategory::class);
    }

}



