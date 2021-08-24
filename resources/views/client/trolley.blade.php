@extends('layouts.main')

@section('title','Cardápio Artes e Mimos Vivi')


@section('content')

<div id="products-container" class="col-md-12">
    <h2>Resumo do Pedido</h2>
   
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>        
          </tr>
        </thead>
    
        <tbody>
            @foreach ($products as $list )
    
          <tr>
           <td>{{$list->name}}</td>
            <td>R$ {{$list->price}}</td>        
          </tr>
          @endforeach
        </tbody>

        <thead>
            <tr>
              <th scope="col">Valor Total</th>
              <th scope="col">R$ {{$valueProducts}}</th>        
            </tr>
          </thead>
      </table>
      
      <a href="https://api.whatsapp.com/send?phone=553171316296 &text={{$namesProducts}}" class="btn btn-primary">Confirmar Pedido</a> 
</form>
</div>







    



@endsection






