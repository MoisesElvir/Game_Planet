<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class brandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view("pages.brand.brand_list", array( "brand"=>$brands));
    }

    public function getForm(){
        return view('pages.brand.add_brand');
    }

    public function toAdd()
    {
        $brands = Brand::all();
        return view('pages.product.add_product', array('brand' => $brands));
    }

    public function addBrand(Request $request)
    {
        $brand = new Brand();

        $brand->name = $request->post('name');
        $brand->save();

        return redirect()->route('brandList');
    }

    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->route('brandList');
    }

    public function updateBrand(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->post('name');
        $brand->save();

        return redirect()->route('brandList');
    }
}
