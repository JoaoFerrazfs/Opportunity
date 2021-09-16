<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientBuy;
use PhpParser\Node\Expr\FuncCall;

class BuyController extends Controller
{
  public function show()
  {
    $search = request('search');

      if($search){

        $resultFilter= ClientBuy::where('id', $search)->get();     

      }else{
        $resultFilter=null;     
        
      }
      return view('client.searchPurchases', ['resultFilter' => $resultFilter]);
    
    
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

  public function report(){    
    $filterNew = "Novo";
    $ResultFilterNew= ClientBuy::where('status', $filterNew)->get();
    
    $fiterProcessing = "Processando";
    $ResultFilterProcessing= ClientBuy::where('status', $fiterProcessing)->get();

    $filterReady="Pronto";
    $ResultFilterReady= ClientBuy::where('status', $filterReady)->get();

    $filterDelivered="Entregue";
    $ResultFilterDelivered= ClientBuy::where('status', $filterDelivered)->get();

    
     $data=$this->treatment($ResultFilterNew,$ResultFilterProcessing,$ResultFilterReady,$ResultFilterDelivered);

    return view('dashboard',['data'=>$data]);

}

public function treatment($ResultFilterNew,$ResultFilterProcessing,$ResultFilterReady,$ResultFilterDelivered){

  $result=[];
  $new= [];
  $processing= [];
  $ready= [];
  $Delivered = [];


  foreach ($ResultFilterNew as $key =>$value ){
    $new[$key]=$value->name;
  }

  foreach ($ResultFilterProcessing as $key =>$value ){
    $processing[$key]=$value->name;
  }

  foreach ($ResultFilterReady as $key =>$value ){
    $ready[$key]=$value->name;
  }

  foreach ($ResultFilterDelivered as $key =>$value ){
    $Delivered[$key]=$value->name;
  }

  $result [1] = count($new);
  $result [2] = count($processing);
  $result [3] = count($ready);
  $result [4] = count($Delivered);  

  return $result;



}
}
