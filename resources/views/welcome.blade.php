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
                <img src="/img/bolo.png" alt="{{$product->name}}">
                <div class="card-body">
                    <p class="card-name"> {{$product->name}}</p>
                    <p class="card-price">R$ {{$product->price}}</p>
                    <p class="card-status"> {{$product->status}}</p>
                    <button class=" btn btn-primary">Comprar</button>

                </div>

            </div>
                
            @endforeach
        </div>
</div>

      
        
@endsection
