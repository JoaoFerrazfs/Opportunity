@extends('layouts.main')

@section('title','Cardápio Artes e Mimos Vivi')


@section('content')

<div id="search-container" class="col-md-12">
    <h1>Gerenciamento de Pedidos</h1>    
</div>



<div id="products-container" class="col-md-12">


@foreach ($teste as $list )
  <form action="/gerenciarpedidos/atualizar/{{$list->id}}" method="POST">
           @csrf
           @method('PUT')
    <h2>Cliente {{$list->name}}</h2>
    
   
   
   
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>  
            <th scope="col">Produtos</th>
            <th scope="col">Valor total</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>        
          </tr>
        </thead>
    
        <tbody>
            
    
          <tr>
           <td>{{$list->name}}</td>
           <td>
            <div class="dropdown">
             
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Lista do pedido
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($list->products as $products )
                  <a class="dropdown-item">{{$products}}</a>
                @endforeach                  
              </div>
             
            </div>
          </td>
           <td>{{$list->amout}}</td>
           
           <td>           
           <div class="dropdown">
                <label for="status">Status:</label>
                <select class="btn btn-outline-dark dropdown-toggle " name="status" id="status">
                    <option  class="dropdown" value="Novo" {{$list->status =="Novo" ? "selected='selected'":""}} >Novo</option>
                    <option  class="dropdown" value="Processando" {{$list->status =="Processando" ? "selected='selected'":""}}  >Processando</option>
                    <option  class="dropdown" value="Pronto" {{$list->status =="Pronto" ? "selected='selected'":""}} >Pronto</option>
                    <option  class="dropdown" value="Entregue" {{$list->status =="Entregue" ? "selected='selected'":""}} >Entregue</option>
                </select>
            </div>
           </td>
           <td>
           <input type="submit" class="btn btn-secondary" value="Salvar Alteração">
           
            </td>
            
          

           
            
          </tr>
         
        </tbody>

        
      </table>

      
      
   
      </form>
      @endforeach
</div>



      
        
@endsection
