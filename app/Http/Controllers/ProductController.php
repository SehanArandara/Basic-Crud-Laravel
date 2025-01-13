<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('product.index',[
            "products"=>$products
        ]);
    }

    public function create() {
        return view('product.add');
    }

    public function store(Request $request){
        $data =  $request->validate([
            'name'=>'required' ,
            'qty' => 'required',
            'price'=>'required',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('product.edit',[
            "product"=>$product
        ]);
    }

    public function update(Product $product,Request $request){
        $data = $request->validate([
            'name'=>'required' ,
            'qty' => 'required',
            'price'=>'required',
            'description' => 'nullable'
        ]);

        $product->update($data);
        return redirect(route('product.index'))->with('success','Product is Updated !! :)');

    }

    public function destroy(Product $product){
        $product->delete();

        return redirect(route('product.index'))->with('success','Product is deleted !! :)');
    }


   
}
