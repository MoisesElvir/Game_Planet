<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product_Type;
use Illuminate\Http\Request;

class product_typeController extends Controller
{
    public function index()
    {
        $product_t = Product_Type::all();
        return view("pages.product_type.product_t_list",array( "productt"=>$product_t));
    }
}
