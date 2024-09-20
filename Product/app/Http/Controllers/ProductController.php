<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
       $products= DB::table('products')->get();
        return view('product.index',['products'=>$products]);
    }
    public function display($id){
        $product= DB::table('products')->where('id', $id)->first();
        return view('product.display',['p'=>$product]);
    }
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        DB::table('products')->insert([
            'name' => $name,
            'price' =>intval($price),
            'quantity' =>intval($quantity),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('/products');
    }

    public function edit($id){
        $product = DB::table('products')->where('id', $id)->first();
        return view('product.edit',['product' => $product]);
    }
    public function update(Request $request, $id){
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        DB::table('products')->where('id', $id)->update([
            'name' => $name,
            'price' =>intval( $price),
            'quantity' =>intval($quantity),
            'updated_at' => now(),
        ]);
        return redirect("/product/{$id}");
    }
    public function delete($id){
        DB::table('products')->where('id', $id)->delete();
        return redirect('/products');
    }
}
