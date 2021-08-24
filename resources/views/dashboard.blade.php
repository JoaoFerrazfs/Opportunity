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
    <h2>Nosso Cardápio<h2>
        <div id="card-container" class="row">
            @foreach ($products as $product )
            <div class="card col-md-3">
                <img src="/img/products/{{$product->image}}" alt="{{$product->name}}">
                <div class="card-body">
                    <p class="card-name"><ion-icon name="caret-forward-circle-outline"></ion-icon>{{$product->name}}</p>
                    <p class="card-price"> <ion-icon name="cash-outline"></ion-icon> R$ {{$product->price}}</p>
                    <p class="card-status" ><ion-icon name="flag-outline"></ion-icon> {{$product->status}}</p>
                    <a href="/produto/{{$product->id}}" class=" btn btn-primary">Ver cadastro</a>

                </div>

            </div>
                
            @endforeach
        </div>
</div>

      
        
@endsection
