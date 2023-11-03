<?php

use App\Http\Controllers\billController;
use App\Http\Controllers\branchController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\buyController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\imageController;
use App\Http\Controllers\product_typeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\supplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('template');   
});

Route::get('/image_list', [imageController::class,'index']);

Route::get('/Product_Type_List', [product_typeController::class,'index']);

Route::get('/Brands_List', [brandController::class,'index']);

//brands to add product pages
Route::get('/brands', [brandController::class, 'toAdd']);

Route::get('/Supplier_List', [supplierController::class,'index']);

Route::get('/Product_List', [productController::class,'index']);

Route::get('/Branch_List', [branchController::class,'index']);

Route::get('/Employees_List', [employeesController::class,'index']);

Route::get('/Customers_List', [customerController::class,'index']);

Route::get('/Buy_List', [buyController::class,'index']);

Route::get('/Bill_List', [billController::class,'index']);

//route for add product
Route::get('/addProduct', [productController::class, 'showAdd'])->name('addProd');

