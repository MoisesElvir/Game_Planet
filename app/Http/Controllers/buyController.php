<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Buy;
use Illuminate\Http\Request;

class buyController extends Controller
{
    public function index()
    {
        $buys = Buy::all();
        return view("pages.buy.buy_list",array( "buy"=>$buys));
    }
}
