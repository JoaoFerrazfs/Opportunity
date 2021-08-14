<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        

        return view('welcome',['products'=>$products]);
        
        }

    public function create(){
        return view('manager.create');
    }

    public function store(Request $request){

        $product = new Product;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->status = $request->status;

        //Image upload

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage= $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")). "." .$extension;

            $requestImage->move(public_path('img/products'),$imageName);

            $product->image=$imageName;

        }

        $product->save();
        return redirect('/dashboard')->with('msg','Produto adicionado com sucesso!');

    }
}
