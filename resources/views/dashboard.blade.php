@extends('layouts.main')

@section('title','Cardápio Artes e Mimos Vivi')


@section('content')

<div id="products-container" class="col-md-12">
    <h2>Pedidos</h2>
    <form action="/gerenciarpedidos/" method="POST"  >
        @csrf
        
        <div id="card-container" class="col-md-12">

            <div class="card col-md-3 ">
                <img src="/img/gerenciamento.jpg" alt="Novos Pedidos">
                <div class="card-body">
                    <p class="card-title ">
                        <ion-icon name="caret-forward-circle-outline"></ion-icon>Novos
                    </p>
                    <p class="card-price">
                        <ion-icon name="cash-outline"></ion-icon> 
                    </p>
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
                <p class="card-title ">
                    <ion-icon name="caret-forward-circle-outline"></ion-icon>Em Produção
                </p>
                <p class="card-price">
                    <ion-icon name="cash-outline"></ion-icon>
                </p>
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
                <p class="card-title ">
                    <ion-icon name="caret-forward-circle-outline"></ion-icon>Prontos
                </p>
                <p class="card-price">
                    <ion-icon name="cash-outline"></ion-icon> 10
                </p>
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
                <p class="card-title ">
                    <ion-icon name="caret-forward-circle-outline"></ion-icon>Entregues
                </p>
                <p class="card-price">
                    <ion-icon name="cash-outline"></ion-icon> 10
                </p>
                <input type="hidden" value="Entregue" name="filter">
                <input type="submit" class="btn btn-primary" value="Verificar Pedidos">
            </div>
        </div>
    </form>

</div>



</div>

@endsection