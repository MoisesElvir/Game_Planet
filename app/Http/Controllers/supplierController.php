<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class supplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view("pages.supplier.supplier_list",array( "supplier"=>$suppliers));
    }
}
