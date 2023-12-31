<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Product_Type;
use App\Models\Supplier;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $products = Product::join('brand', 'product.brand_id', '=', 'brand.id')
        ->join('product_type', 'product.product_type_id', '=', 'product_type.id')
        ->join('supplier', 'product.supplier_id', '=', 'supplier.id')
        ->select('product.*', 'brand.name as brand', 'product_type.name as productType', 'supplier.name as supplier')->get();
        return view("pages.product.product_list",array( "product"=>$products));
    }

    public function showAdd()
    {
        $brands = Brand::all();
        $categories = Product_Type::all();
        $supplier = Supplier::all();

        return view('pages.product.add_product', ['brand'=>$brands, 'categorie'=>$categories, 'supplier'=>$supplier]);
    }

    public function addProduct(Request $request)
    {
        $product = new Product();

        $product->name = $request->post('name');
        $product->description = $request->post('description');
        $product->price = $request->post('price');
        $product->image = $request->post('image');
        $product->supplier_id = $request->post('supplier');
        $product->brand_id = $request->post('brand');
        $product->product_type_id = $request->post('categorie');
        $product->save();

        return redirect()->route('productList');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('productList');
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->post('name');
        $product->description = $request->post('description');
        $product->price = $request->post('price');
        $product->image = $request->post('image');
        $product->supplier_id = $request->post('supplier');
        $product->brand_id = $request->post('brand');
        $product->product_type_id = $request->post('categorie');
        $product->save();

        return redirect()->route('productLIst');
    }

}
