<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Supenseigne - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #c8cacc;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        @auth
                        <li class="nav-item active">
                            <a class="nav-link" href="/mon-compte">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        @else            
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        @endauth  
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @auth
                            <a href="/profil" class="nav-link">Mon profil</a>            
                            <a href="/deconnexion" class="nav-link">Déconnexion</a>
                        @else
                            <a href="/connexion" class="nav-link">Connexion</a>                  
                            <a href="/inscription" class="nav-link">Inscription</a>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('flash::message')

            @yield('content')
        </main>
    </div>
</body>
</html>
