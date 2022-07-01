<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutItems extends Model
{
    protected $fillable = ['product_id','value'];

    use HasFactory;
}
