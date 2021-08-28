@extends('layouts.main')

@section('title','Cardápio Artes e Mimos Vivi')


@section('content')

<div id="products-container" class="col-md-12">
    <h2>Resumo do Pedido</h2>,

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
            <td>R$ {{$list->price}}</td>        
          </tr>
          @endforeach
        </tbody>

        <thead>
            <tr>
              <th scope="col">Valor Total</th>
              <th scope="col">R$ {{$valueProducts}}</th>        
            </tr>
          </thead>
      </table>     


      <div class="data" >

        <h2> Dados pessoais </h2>

      <form method="POST" enctype="multipart/form-data" >
        @csrf
      <div class="row g-2 personalData mb-3 row ">

        <div class="col-auto">
          <label for="name">Nome: </label>
         <input type="text" class="form-control" name="name" id="name" placeholder="Seu nome">
       </div>
        <div class="col-auto">
          <label for="name">Telefone: </label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Seu telefone">
        </div>
        <div class="col-sm-6">
          <label for="name">Email: </label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Seu email">
        </div>
        
      </div>
      <input type="submit" class="btn btn-primary" value="Confirmar Pedido">
      
      </form> 

      </div>
</div>









    



@endsection






