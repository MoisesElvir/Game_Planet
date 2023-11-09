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

Route::get('', function () {
    return view('template');   
});

Route::get('/image_list', [imageController::class,'index']);

Route::get('/Product_Type_List', [product_typeController::class,'index'])->name('categorieList');

Route::get('/Product_Type', [product_typeController::class,'getForm'])->name('PTregistrationForm');
Route::put('/updateCategorie/{id}', [product_typeController::class,'update'])->name('updateCategorie');

Route::get('/Brands_List', [brandController::class,'index'])->name('brandList');

//brands to add product pages
//Route::get('/brands', [brandController::class, 'toAdd']);

Route::get('/Supplier_List', [supplierController::class,'index'])->name('supplierList');

Route::get('/Product_List', [productController::class,'index'])->name('productList');

// branch
Route::get('/Branch_List', [branchController::class,'index']);
Route::get('/Branch_form', [branchController::class,'getForm'])->name('registrationForm');
Route::post('/Save_branch', [branchController::class,'addBranch'])->name('saveBranch');
Route::put('/update_Branch/{id}', [branchController::class,'update'])->name('updateBranch');
Route::put('/disable_Branch/{id}', [branchController::class,'destroy'])->name('branchDisabled');

// Employees
Route::get('/Employees_List', [employeesController::class,'index']);
Route::get('/Employee_form', [employeesController::class,'getForm'])->name('registrationForm');
Route::post('/Save_employee', [employeesController::class,'addEmployee'])->name('saveEmployee');
Route::put('/update_employee/{id}', [employeesController::class,'update'])->name('updateEmployee');
Route::put('/disable_employee/{id}', [employeesController::class,'destroy'])->name('employeeDisabled');

// Customers
Route::get('/Customers_List', [customerController::class,'index']);
Route::get('/Customer_form', [customerController::class,'getForm'])->name('registrationForm');
Route::post('/Save_customer', [customerController::class,'addCustomer'])->name('saveCustomer');
Route::put('/update_customer/{id}', [customerController::class,'update'])->name('updateCustomer');
Route::put('/disable_customer/{id}', [customerController::class,'destroy'])->name('customerDisabled');

Route::get('/Buy_List', [buyController::class,'index']);
Route::get('/Buy_form', [buyController::class,'getForm'])->name('registrationForm');
Route::post('/Save_buy', [buyController::class,'addBuy'])->name('saveBuy');
Route::put('/update_buy/{id}', [buyController::class,'update'])->name('updateBuy');
Route::put('/disable_buy/{id}', [buyController::class,'delete'])->name('deleteBuy');

Route::get('/Bill_List', [billController::class,'index']);
Route::get('/Bill_form', [billController::class,'getForm'])->name('registrationForm');
Route::post('/Save_bill', [billController::class,'addBill'])->name('saveBill');
Route::put('/update_bill/{id}', [billController::class,'update'])->name('updateBill');
Route::put('/disable_bill/{id}', [billController::class,'delete'])->name('deleteBill');

//route for view add product
Route::get('/showAddProduct', [productController::class, 'showAdd'])->name('showAddProd');
//route for add product
Route::post('/addProduct', [productController::class, 'addProduct'])->name('addP');
//route for delete product
Route::delete('/deleteProduct/{id}', [productController::class,'deleteProduct'])->name('deleteP');

//route of view add supplier
Route::get('/viewAddSupplier', [supplierController::class, 'viewAdd'])->name('viewAddSupplier');
//route for add supplier
Route::get('/Supplier_form', [supplierController::class,'viewAdd'])->name('registrationForm');
Route::post('/addSupplier', [supplierController::class, 'addSupplier'])->name('addSupplier');
//delete supplier
Route::delete('/deleteSupplier/{id}', [supplierController::class,'deleteSupplier'])->name('deleteSupplier');
//update supplier
Route::put('/updateSupplier/{id}', [supplierController::class,'updateSupplier'])->name('updateSupplier');


//route for add categorie
Route::post('/saveCategorie', [product_typeController::class, 'saveCategorie'])->name('saveCategorie');
//delete categorie
Route::delete('/deleteCategorie/{id}', [product_typeController::class,'deleteCategorie'])->name('deleteCategorie');
//update categorie
Route::put('/updateCategorie/{id}', [product_typeController::class,'updateCategorie'])->name('updateCategorie');

//route for add brand
Route::get('/Brand_form', [brandController::class,'getForm'])->name('registrationForm');
Route::post('/addBrand', [brandController::class, 'addBrand'])->name('addBrand');
//delete brand
Route::delete('/deleteBrand/{id}', [brandController::class, 'deleteBrand'])->name('deleteBrand');
//update brand
Route::put('/updateBrand/{id}', [brandController::class, 'updateBrand'])->name('updateBrand');