<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav">
                        <li>
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li>
                            <a href="/cars/create" class="nav-link">Create</a>
                        </li>
                        <li>
                            <a href="/" class="nav-link">Sign in</a>
                        </li>
                        <li>
                            <a href="/" class="nav-link">Sign up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        @yield('content')
        
    </body>
</html>
