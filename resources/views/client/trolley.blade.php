@extends('layouts.main')

@section('title','Cardápio Artes e Mimos Vivi')


@section('content')

<div id="products-container" class="col-md-12">
    <h2>Resumo do Pedido</h2>


    <form action="/compra"  method="POST"  >
      @csrf
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>        
          </tr>
        </thead>
    
        <tbody>
            @foreach ($products as $list )
    
          <tr>
           <td>{{$list->name}}</td>
            <input type="hidden" id="products" name="products[]" value="{{$list->name}}">
          <td>R$ {{$list->price}}</td>
            <input type="hidden" id="price" name="price[]" value="{{$list->price}}">        
          </tr>
          @endforeach
        </tbody>

        <thead>
            <tr>
              <th scope="col">Valor Total</th>
              <th scope="col">R$ {{$valueProducts}}</th>
                <input type="hidden" id="amout" name="amout" value="{{$valueProducts}}">
            </tr>
          </thead>
      </table>     


      <div class="data" >

        <h2> Dados pessoais </h2>
        
      <div class="row g-2 personalData mb-3 row ">

        <div class="col-auto">
          <label for="name">Nome: </label>
         <input type="text" class="form-control" name="name" id="name" placeholder="Seu nome">
       </div>
        <div class="col-auto">
          <label for="name">Telefone: </label>
          <input type="text" class="form-control" name="fone" id="fone" placeholder="Seu telefone">
        </div>
        <div class="col-sm-6">
          <label for="name">Email: </label>
          <input type="text" class="form-control" name="email" id="email" placeholder="Seu email">
        </div>

        <input type="hidden" id="status" name="status" value="novo">
        
      </div>
      <input type="submit" class="btn btn-primary" value="Confirmar Pedido">
      
      </form> 

      </div>
</div>









    



@endsection






