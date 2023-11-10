<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Product;
use Illuminate\Http\Request;

class branchController extends Controller
{
    public function index()
    {
        $branchs = Branch::all();
        // consulta correcta
        //$branchs = Branch::join('product', 'branch.id_product', '=', 'product.id')->select('branch.*', 'product.name as product')->get();
        $products = Product::all();
        return view("pages.branch.branch_list",array( "branch"=>$branchs), array("product" => $products));
    }

        
    public function getForm(){
        $products = Product::all();
        return view('pages.branch.add_branch', array("product" => $products));
    }

    public function addBranch(Request $request){
        $branch = new Branch();
        $branch->name = $request->post('name');
        $branch->address = $request->post('address');
        $branch->phone = $request->post('phone');
        $branch->id_product = $request->post('id_product');

        $branch->save();

        return redirect('/Branch_List');
    }

    public function update(Request $request, $id){

        $branch = Branch::find($id);
        $branch->name = $request->post('name');
        $branch->address = $request->post('address');
        $branch->phone = $request->post('phone');
//        $branch->id_product = $request->post('id_product');

        $branch->update();

        return redirect('/Branch_List');

    }

    // public function destroy($id){
    //     $branch = Branch::find($id);
    //     $branch->id_status = 2;
    //     $branch->update();

    //     return redirect('/Branch_List');
    // }
}
