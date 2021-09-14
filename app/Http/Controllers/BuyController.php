<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientBuy;
use PhpParser\Node\Expr\FuncCall;

class BuyController extends Controller
{
  public function show()
  {

    $products = ClientBuy::all();


    return view('client.searchPurchases', ['products' => $products]);
  }


  public function store(Request $request)
  {

    $clientBuy = new ClientBuy;

    $clientBuy->name = $request->name;
    $clientBuy->fone = $request->fone;
    $clientBuy->email = $request->email;
    $clientBuy->status = $request->status;
    $clientBuy->products = $request->products;
    $clientBuy->values = $request->price;
    $clientBuy->amout = $request->amout;

    $clientBuy->save();

    $teste = $clientBuy->id;

    return redirect('/')->with('msg', 'Compra Realizada com Sucesso!    Número do Pedido: ' . $teste);
  }

  public function statusRequests(Request $request)
  {
    $filter = request('filter');
    $teste = ClientBuy::where('status', $filter)->get();


    return view('manager.request', ['teste' => $teste]);
  }

  public function update(Request $request)
  {
    $data = $request->all();
    ClientBuy::findOrFail($request->id)->update($data);

    return redirect('/dashboard')->with('msg','Pedido '.$request->id. ' Atualizado');
  }
}
