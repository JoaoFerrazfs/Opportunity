@extends('layouts.main')

@section('title','Produto: '.$product->name)
@section('content')


<div class="col-md-6 offset-md-3 " id="product-create-container">
    <h1> Editando {{$product->name}} </h1>
        <form action="/produto/atualizar/{{$product->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}" placeholder="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="price">Preço:</label>
                <input type="text" class="form-control" name="price" id="price" value="{{$product->price}}" placeholder="{{$product->price}}">
            </div>    
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" id="status">
                    <option value="Disponivel"{{$product->status =="Disponivel" ? "selected='selected'":""}}>Disponível</option>
                    <option value="indisponivel" {{$product->status =="indisponivel" ? "selected='selected'":""}} >Indisponível</option>
                    <option value="Encomenda" {{$product->status =="Encomenda" ? "selected='selected'":""}} >Encomenda</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Imagem do Evento</label>
               <input type="file" class="from-control-file" id="image" name="image">
               <img src="/img/products/{{$product->image}}" alt="Foto de {{$product->name}}" class="img-preview">
            </div>
            
            <input type="submit" class="btn btn-primary" value="Salvar produto">
        </form>
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