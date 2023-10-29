<?php

use App\Http\Controllers\ProductController;
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
    return view('login');   
});

//route for form view
Route::get('/addProduct', function () {return view('pages.addProduct');});

//route for get information of brands table
Route::get('/getBrand', [ProductController::class, 'getBrands']);

//route for get information of categories table
Route::get('/getCategorie', [ProductController::class, 'getCategorie']);
