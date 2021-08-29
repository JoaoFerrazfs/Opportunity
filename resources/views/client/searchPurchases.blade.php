@extends('layouts.main')

@section('title', 'Cardápio Artes e Mimos Vivi')


@section('content')


    <div id="search-container" class="col-md-12 ">
        <div class="row justify-content-md-center">

            <div class="col col-md-10">
                <h1>Qual seu número de pedido? </h1>
            </div>
            
            <form action="/consultapedido/" method="POST">
                <div class=" col-md-auto form-group col-6 ">
                    <input type="text" id="search" name="search" class=" form-control" placeholder="Pedido">
                </div>
                <div class="col-md-auto">
                    <input type="submit" id="btn-search" name="btn-search" class="btn btn-primary" value="Procurar">
                </div>
            </form>

        </div>


    </div>


@endsection
