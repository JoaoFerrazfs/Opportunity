@extends('layouts.main')

@section('title', 'Cadastrar Produto')

@section('content')


<div class="col-md-6 offset-md-3 " id="product-create-container">
    <h1> Cadastre seu novo produto </h1>
        <form action="/produto" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nome do Produto">
            </div>
            <div class="form-group">
                <label for="price">Preço:</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Preço">
            </div>    
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" id="status">
                    <option value="Disponivel">Disponível</option>
                    <option value="indisponivel">Indisponível</option>
                    <option value="Encomenda">Encomenda</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Imagem do Evento</label>
               <input type="file" class="from-control-file" id="image" name="image">
            </div>
            
            <input type="submit" class="btn btn-primary" value="Salvar produto">
        </form>
</div>


@endsection