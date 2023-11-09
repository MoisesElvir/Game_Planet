<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Buy;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class buyController extends Controller
{
    public function index()
    {
        $buys = Buy::all();
        $products = Product::all();
        $customers = Customer::all();
        return view("pages.buy.buy_list",array( "buy"=>$buys), array("product" => $products), array("customer" => $customers));
    }

    public function getForm(){
        $products = Product::all();
        $customers = Customer::all();
        return view('pages.buy.add_buy', array("product" => $products), array("customer" => $customers));
    }

    public function addBuy(Request $request){
        $buy = new Buy();
        $buy->quantity = $request->post('quantity');
        $buy->payment_method = $request->post('payment_method');
        $buy->id_customer = $request->post('id_customer');
        $buy->id_product = $request->post('id_product');

        $buy->save();

        return redirect('/Buy_List');
    }

    public function update(Request $request, $id){

        $buy = Buy::find($id);
        $buy->quantity = $request->post('quantity');
        $buy->payment_method = $request->post('payment_method');
        $buy->id_customer = $request->post('id_customer');
        $buy->id_product = $request->post('id_product');

        $buy->update();

        return redirect('/Buy_List');

    }

    public function delete(Request $request, $id){
        $buy = Buy::find($id);
        $buy->delete();

        return redirect('/Buy_List');
    }
}
