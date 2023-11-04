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
use App\Models\Employees;
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

// Employees
Route::get('/Employees_List', [employeesController::class,'index']);
Route::get('/Employee_form', [employeesController::class,'getForm'])->name('registrationForm');
Route::post('/Save_employee', [employeesController::class,'addEmployee'])->name('saveEmployee');

// Customers
Route::get('/Customers_List', [customerController::class,'index']);
Route::get('/Customer_form', [customerController::class,'getForm'])->name('registrationForm');
Route::post('/Save_customer', [customerController::class,'addCustomer'])->name('saveCustomer');
Route::put('/update_customer/{id}', [customerController::class,'update'])->name('updateCustomer');
Route::put('/disable_customer/{id}', [customerController::class,'destroy'])->name('customerDisabled');

Route::get('/Buy_List', [buyController::class,'index']);

Route::get('/Bill_List', [billController::class,'index']);

//route for add product
Route::get('/addProduct', [productController::class, 'showAdd'])->name('addProd');

