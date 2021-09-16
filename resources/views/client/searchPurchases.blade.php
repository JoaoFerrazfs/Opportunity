@extends('layouts.main')

@section('title', 'Cardápio Artes e Mimos Vivi')


@section('content')


<div id="search-container" class="col-md-12 ">
    <div class="row justify-content-md-center">

        <div class="col col-md-10">
            <h1>Qual seu número de pedido?</h1>
        </div>

        <form action="/consultapedido/" method="GET">
            <div class=" col-md-auto form-group col-6 ">
                <input type="text" id="search" name="search" class=" form-control" placeholder="Pedido">
            </div>
            <div class="col-md-auto">
                <input type="submit" id="btn-search" name="btn-search" class="btn btn-primary" value="Procurar">
            </div>
        </form>

    </div>

    @if ($resultFilter == null)
    <h2>Ainda não foi realizada nenhuma pesquisa</h2>

    @else

    <div class="container-fluid">
        <h2>Agradecemos pela compra</h2>

        <table class="table caption-top">

            <thead>
                <tr>
                    <th scope="col">Numero do Pedido</th>
                    <th scope="col">Produtos</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($resultFilter as $request )
                    <td>{{$request->id}} </td>
                    <td>
                        <div class="dropdown">

                            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produtos
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($request->products as $products )
                                <a class="dropdown-item">{{$products}}</a>
                                @endforeach
                            </div>

                        </div>

                    </td>
                    <td>{{$request->status}}</td>
                    @endforeach
                </tr>
            </tbody>

    </div>


</div>

@endif
@endsection