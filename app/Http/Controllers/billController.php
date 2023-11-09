<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Buy;
use App\Models\Employees;
use Illuminate\Http\Request;

class billController extends Controller
{
    public function index()
    {
        $bills = Bill:: all();
        $buy = Buy::all();
        $employees = Employees::all();
        return view("pages.bill.bill_list", array ("bill"=>$bills), array("buy" => $buy), array("employee" => $employees));
    }

    public function getForm(){
        $buy = Buy::all();
        $employees = Employees::all();
        return view('pages.bill.add_bill', array("buy" => $buy), array("employee" => $employees));
    }

    public function addBill(Request $request){
        $bill = new Bill();
        $bill->bill_number = $request->post('bill_number');
        $bill->Bill_Date = $request->post('Bill_Date');
        $bill->total = $request->post('total');
        $bill->id_buy = $request->post('id_buy');
        $bill->id_employee = $request->post('id_employee');

        $bill->save();

        return redirect('/Bill_List');
    }

    public function update(Request $request, $id){

        $bill = Bill::find($id);
        $bill->bill_number = $request->post('bill_number');
        $bill->Bill_Date = $request->post('Bill_Date');
        $bill->total = $request->post('total');
        $bill->id_buy = $request->post('id_buy');
        $bill->id_employee = $request->post('id_employee');

        $bill->update();

        return redirect('/Bill_List');

    }

    public function delete(Request $request, $id){
        $bill = Bill::find($id);
        $bill->delete();

        return redirect('/Bill_List');
    }
}

