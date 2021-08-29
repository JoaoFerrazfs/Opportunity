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
                                <a href="/dashboard" class="nav-link">Gerenciamento</a>
                            </li>
                            <li class="nav-item">
                                <a href="/produto/cadastro" class="nav-link">Cadastro de Produto</a>
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
    </body>
</html>
