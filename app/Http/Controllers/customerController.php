<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view("pages.customers.customers_list",array( "customer"=>$customers));
    }
}
