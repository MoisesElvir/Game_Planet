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

    public function getForm(){
        return view('pages.product_type.add_product_type');} 

    public function saveCategorie(Request $request)
    {
        $categorie = new Product_Type();

        $categorie->name = $request->post('name');
        $categorie->save();

        return redirect()->route('categorieList');
    }

    public function deleteCategorie($id)
    {
        $categorie = Product_Type::find($id);
        $categorie->delete();   

        return redirect()->route('categorieList');
    }

    public function updateCategorie(Request $request, $id){
        $product_t = Product_Type::find($id);

        $product_t->name = $request->post('name');
        $product_t->save();

        return redirect()->route('categorieList');
    }
}