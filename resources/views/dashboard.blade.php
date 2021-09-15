@extends('layouts.main')

@section('title','Cardápio Artes e Mimos Vivi')


@section('content')

<div id="products-container" class="col-md-12">
    <h2>Tratamento de Pedidos</h2>
    <form action="/gerenciarpedidos/" method="POST"  >
        @csrf
        
        <div id="card-container" class="col-md-12">

            <div class="card col-md-3 ">
                <img src="/img/gerenciamento.jpg" alt="Novos Pedidos">
                <div class="card-body">
                    <p class="card-title ">Novos Pedidos</p>
                    <p class="card-title ">Quantidade: {{$data[1]}}</p> 
                    
                    <input type="hidden" value="Novo" name="filter">
                    <input type="submit" class="btn btn-primary" value="Verificar Pedidos">
                </div>
            </div>
    </form>

    <form action="/gerenciarpedidos/" method="POST"  >
        @csrf
        <div class="card col-md-12 ">
            <img src="/img/gerenciamento1.jpg" alt="Novos Pedidos">
            <div class="card-body">
                <p class="card-title ">Pedidos em Produção</p>
                <p class="card-title ">Quantidade: {{$data[2]}}</p>               
                <input type="hidden" value="Processando" name="filter">
                <input type="submit" class="btn btn-primary" value="Verificar Pedidos">
            </div>
        </div>
    </form>

    <form action="/gerenciarpedidos/" method="POST"  >
        @csrf
        <div class="card col-md-12 ">
            <img src="/img/gerenciamento2.jpg" alt="Novos Pedidos">
            <div class="card-body">
                <p class="card-title ">Pedidos prontos</p>
                <p class="card-title ">Quantidade: {{$data[3]}}</p>              
                <input type="hidden" value="Pronto" name="filter">
                <input type="submit" class="btn btn-primary" value="Verificar Pedidos">
            </div>
        </div>
    </form>

    <form action="/gerenciarpedidos/" method="POST"  >
        @csrf
        <div class="card col-md-12 ">
            <img src="/img/gerenciamento3.jpg" alt="Novos Pedidos">
            <div class="card-body">
                <p class="card-title ">Pedidos entregues</p>
                <p class="card-title ">Quantidade: {{$data[4]}}</p>                
                <input type="hidden" value="Entregue" name="filter">
                <input type="submit" class="btn btn-primary" value="Verificar Pedidos">
            </div>
        </div>
    </form>

</div>



</div>

@endsection