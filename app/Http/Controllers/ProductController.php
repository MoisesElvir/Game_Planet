<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //get element of table brabds
    public function getBrands(){
        
        $brand = Brand::all();

        return view('pages.addProduct', ['brand' => $brand]);
    }

    public function getCategorie(){
        $categorie = Categorie::all();

        return view('pages.addProduct', ['product_type' => $categorie]);
    }


}

