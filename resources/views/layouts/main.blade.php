<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


    </head>
    <body>
        <header style="max-width: 1200px; margin: auto; margin-top: 20px">
            <nav class="navbar navbar-expand-lg static-top">
                <div>
                    <a  class="navbar-brand" href="/">
                        <img src="/img/logo.png" alt="logo" width="48">
                    </a>
                </div>

                    <ul class="navbar-nav ms-auto">

                        <li>
                            <a href="/" class="nav-link">Página inicial</a>
                        </li>

                        @auth
                        <li>
                            <a href="/dashboard" class="nav-link">Anunciar</a>
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li>
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li>
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                        @endguest
                    </ul>
            </nav>
        </header>


        <main class="container">

            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

        <footer style="margin-top: 9rem">
            <div class="d-flex justify-content-center">
                <img src="img/logo.png" width="40" alt="">
            </div>
            <hr>
            <p class="text-center ">© 2022</p>
        </footer>
    </body>
</html>
