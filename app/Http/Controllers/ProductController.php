<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("pages.product.product_list",array( "product"=>$products));
    }
}