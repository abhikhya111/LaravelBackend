<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\AboutItemsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/getCategory',[CategoryController::class, 'getCategory']);
Route::get('/api/getSubCategories/{id}',[SubCategoryController::class, 'getSubCategories'])->name('getSubCategories');
Route::get('/api/getProducts/{id}', [ProductController::class, 'getProducts'])->name('getProducts');
Route::get('/api/getSpecificationPoints/{id}', [SpecificationController::class, 'getSpecificationPoints'])->name('getSpecificationPoints');
Route::get('/api/productImages/{id}', [ProductImageController::class, 'productImages'])->name('productImages');
Route::get('/api/getAboutOfItems/{id}', [AboutItemsController::class, ' getAboutOfItems'])->name('getAboutOfItems');