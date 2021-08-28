@extends('layouts.main')

@section('title','Cardápio Artes e Mimos Vivi')


@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque uma Guloseima </h1>
    <form action="#"> 
        <input type="text" id="search" name="serach" class=" form-control" placeholder="Procurar">
    </form>
</div>



<div id="products-container" class="col-md-12">
    <h2>Nossos Produtos</h2>
   
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>  
            <th scope="col">Imagem</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>     
          </tr>
        </thead>
    
        <tbody>
            @foreach ($products as $list )
    
          <tr>
           <td>{{$list->name}}</td>
            <td>R$ {{$list->price}}</td>   
            <td> <img src="/img/products/{{$list->image}}" alt="{{$list->name}}"></td>
            <td>R$ {{$list->status}}</td>
            <td><a href="/produto/{{$list->id}}" class=" btn btn-primary">Editar</a></td>    
          </tr>
          @endforeach
        </tbody>

        
      </table>
      
   

</div>



      
        
@endsection
