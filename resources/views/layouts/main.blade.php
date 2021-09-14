<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
    </head>
    <body>

        <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collpse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand">
                            <img src="/img/logo.png" alt="Icone">
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Cardárpio</a>
                            </li>
                            @auth
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link">Demanda</a>
                            </li>
                            <li class="nav-item">
                                <a href="/produto/cadastro" class="nav-link">Cadastro de Produto</a>
                            </li>
                            <li class="nav-item">
                                <a href="/gerenciarprodutos" class="nav-link">Meus produtos</a>
                            </li>
                            <form action="/logout" method="POST">
                                @csrf
                            <a href="/logout"
                                class="nav-link" onclick="event.preventDefault();
                                this.closest('form').submit();">
                                Sair
                            </a>
                            </form>

                            @endauth

                            @guest
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="/consultapedido"class="btn btn btn-outline-info">Status do Seu pedido</a>
                            </li>
                            @endguest                             
                            
                        </ul>
                    </div>

                </nav>

            
        </header>

        <main> 
            <div class="container-fluid">
                <div class="row">
                @if (session('msg'))
                <p class="msg">{{ session('msg') }}</p>                    
                @endif
                @yield('content')
                
                </div>

            </div>

        </main>
        
        
        

        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
