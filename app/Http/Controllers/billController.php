<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;

class billController extends Controller
{
    public function index()
    {
        $bills = Bill:: all();
        return view("pages.bill.bill_list", array ("bill"=>$bills));
    }
}
