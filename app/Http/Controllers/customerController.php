<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {
        $customers = Customer::select('*')->where('id_status', '=', 1)->get();
        return view("pages.customers.customers_list",array( "customer"=>$customers));
    }

    public function getForm(){
        return view('pages.customers.add_customer');
    }

    public function addCustomer(Request $request){
        $customer = new Customer();
        $customer->name = $request->post('name');
        $customer->lastname = $request->post('lastname');
        $customer->phone = $request->post('phone');
        $customer->gender = $request->post('gender');
        $customer->email = $request->post('email');
        $customer->password = $request->post('password');
        $customer->id_status = 1;

        $customer->save();

        return redirect('/Customers_List');
    }

    public function update(Request $request, $id){

        $customer = Customer::find($id);
        $customer->name = $request->post('name');
        $customer->lastname = $request->post('lastname');
        $customer->phone = $request->post('phone');
        $customer->gender = $request->post('gender');
        $customer->email = $request->post('email');
        $customer->password = $request->post('password');

        $customer->update();

        return redirect('/Customers_List');

    }

    public function destroy($id){
        $customer = Customer::find($id);
        $customer->id_status = 2;
        $customer->update();

        return redirect('/Customers_List');
    }
}
