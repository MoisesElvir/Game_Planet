<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view("pages.brand.brand_list",array( "brand"=>$brands));
    }

    public function toAdd()
    {
        $brands = Brand::all();
        return view('pages.product.add_product', array('brand' => $brands));
    }
}
