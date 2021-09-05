@extends('layouts.main')

@section('title','Produto: '.$product->name)
@section('content')



<div class="co-md-10 offset-md-1">
    <div class="row img-product">
        <div id="image-container" class="col-md-6">
            <img srcset="/img/products/{{$product->image}}" class="img-fluid" alt="{{$product->name}}">
        </div>

        <div id="info-container" class="col-md-6">
            <h1>{{$product->name}}</h1>
            <p class="product-price">
                <ion-icon name="pricetags-outline"></ion-icon>{{ $product->price}}
            </p>
            <p class="product-price">
                <ion-icon name="flag-outline"></ion-icon>{{ $product->status}}
            </p>

        </div>

        <div id="action-container" class="form-control row col">
            

            <form action="/produto/{{ $product->id }}" method="POST">
            @csrf
            @method('DELETE')
                <div class="deleteproduct">
                    <button type="submit" class="btn btn-danger" id="product-update">Deletar Produto</button>
                </div>
            </form>
        </div>

    </div>











    @endsection