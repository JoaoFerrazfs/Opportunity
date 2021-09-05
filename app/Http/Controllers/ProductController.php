<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\ViewErrorBag;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        

        return view('welcome',['products'=>$products]);
        
        }

    public function indexProduct(){

        $products = Product::all();
            
    
        return view('manager.products',['products'=>$products]);
            
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

    public function show($id){

        $product = Product::findOrFail($id);

        return view('manager.show',['product'=>$product]);

    }

    public function trolley(Request $request){

        $product = new Product;

        $listIdProduct=$product->id=$request->buy;  
        $list=[];
        $amount=0;
        $i=1;      
        $names="Pedido: ";
        
       foreach ($listIdProduct as $key => $build )       {
           
           $list[$key] = $product::find($build) ;  
           $amount= $amount + $list[$key]->price  ; 
           $names= $names." Produto: ".$i." ". $list[$key]->name;
           $i++;
           
       }
       return view('client.trolley',['products'=>$list,'valueProducts'=>$amount,'namesProducts'=>$names]);

      
    }

    public function report(){
        $products = Product::all();
        

        return view('dashboard',['products'=>$products]);

    }

    public function destroy($id) {

        Product::findOrFail($id)->delete();

       return redirect('/gerenciarprodutos')->with('msg','Produto excluído com sucesso!');

    }

    public function update(Request $request){

        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage= $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")). "." .$extension;

            $requestImage->move(public_path('img/products'),$imageName);

            $data['image'] = $imageName;

        }


        Product::findOrFail($request->id)->update($data);

        return redirect('/gerenciarprodutos')->with('msg','Produto atualizado com sucesso!');
    }
   
    
}
