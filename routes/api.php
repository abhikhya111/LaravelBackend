<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AboutItemsController;
use App\Http\Controllers\ProductImageController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/listCategory',[CategoryController::class, 'listCategory']);
Route::get('/createCategory',[CategoryController::class, 'createCategory'])->name('createCategory');
Route::post('/storeCategory',[CategoryController::class, 'storeCategory'])->name('storeCategory');
Route::get('/editCategory/{id}',[CategoryController::class,'editCategory'])->name('editCategory');
Route::post('/updateCategory/{id}',[CategoryController::class,'updateCategory'])->name('updateCategory');

Route::get('/listSubCategory',[SubCategoryController::class,'listSubCategory'])->name('listSubCategory');
Route::get('/createSubCategory',[SubCategoryController::class, 'createSubCategory'])->name('createSubCategory');
Route::post('/storeSubCategory',[SubCategoryController::class, 'storeSubCategory'])->name('storeSubCategory');
Route::get('/editSubCategory/{id}',[SubCategoryController::class,'editSubCategory'])->name('editSubCategory');
Route::post('/updateSubCategory/{id}',[SubCategoryController::class,'updateSubCategory'])->name('updateSubCategory');

Route::get('/listProduct',[ProductController::class,'listProduct'])->name('listProduct');
Route::get('/createProduct',[ProductController::class, 'createProduct'])->name('createProduct');
Route::post('/product',[ProductController::class, 'storeProduct'])->name('storeProduct');
Route::get('/product/{id}',[ProductController::class,'editProduct'])->name('editProduct');
Route::post('/product/{id}',[ProductController::class,'updateProduct'])->name('updateProduct');

Route::get('/listSpecification',[SpecificationController::class,'listSpecification'])->name('listSpecification');
Route::get('/getSpecifications/{id}',[SpecificationController::class, 'getSpecifications'])->name('getSpecifications');
Route::get('/editSpecification/{id}',[SpecificationController::class, 'editSpecification'])->name('editSpecification');
Route::post('/updateSpecifications',[SpecificationController::class,'updateSpecifications'])->name('updateSpecifications');

Route::get('/listContent',[ContentController::class,'listContent'])->name('listContent');
Route::get('/getContent/{id}',[ContentController::class, 'getContent'])->name('getContent');
Route::get('/editContents/{id}',[ContentController::class, 'editContents'])->name('editContents');

Route::get('/listAboutItems',[AboutItemsController::class,'listAboutItems'])->name('listAboutItems');
Route::get('/getAboutItems/{id}',[AboutItemsController::class, 'getAboutItems'])->name('getAboutItems');
// Route::get('/editContents/{id}',[AboutItemsController::class, 'editContents'])->name('editContents');

Route::get('/listProductImages',[ProductImageController::class,'listProductImages'])->name('listProductImages');
Route::get('/showProductImages/{id}',[ProductImageController::class,'showProductImages'])->name('showProductImages');
Route::post('/removeImage/{product_id}/{name}', [ProductImageController::class, 'removeImage'])->name('removeImage');
Route::post('/addImage/{product_id}/{name}',[ProductImageController::class, 'addImage'])->name('addImage');