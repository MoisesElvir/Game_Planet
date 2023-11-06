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

    public function viewAdd()
    {
        return view('pages.supplier.add_supplier');
    }

    public function addSupplier(Request $request){
        $supplier = new Supplier();

        $supplier->name = $request->post('name');
        $supplier->address = $request->post('address');
        $supplier->phone = (string)$request->post('phone');
        $supplier->save();

        return redirect()->route('supplierList');
    }

    public function deleteSupplier($id)
    {
        $supplier = Supplier::find($id);

        $supplier->delete();

        return redirect()->route('supplierList');
    }

    public function updateSupplier(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $request->post('name');   
        $supplier->address = $request->post('address');
        $supplier->phone = (string)$request->post('phone');
        $supplier->save();
        
        return redirect()->route('supplierList');
    }
}
