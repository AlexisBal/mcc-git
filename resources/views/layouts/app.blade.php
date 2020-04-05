<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>My Course Choice - @yield('title')</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>
    <body>
        <nav class="navbar is-light">
          <div class="navbar-menu">
            <div class="navbar-start">
                @auth
                    <a href="/mon-compte" class="navbar-item">Accueil</a>   
                @else            
                    <a href="/" class="navbar-item">Accueil</a>
                @endauth                
            </div>
            <div class="navbar-end"> 
                @auth
                    <a href="/profil" class="navbar-item {{ request()->is('profil') ? 'is-active' : '' }}">Mon profil</a>
                    <a href="/mes-informations" class="navbar-item {{ request()->is('mes-informations') ? 'is-active' : '' }}">Modifier mon profil</a>               
                    <a href="/deconnexion" class="navbar-item">Déconnexion</a>
                @else
                    <a href="/connexion" class="navbar-item {{ request()->is('connexion') ? 'is-active' : '' }}">Connexion</a>                  
                    <a href="/inscription" class="navbar-item {{ request()->is('inscription') ? 'is-active' : '' }}">Inscription</a>
                @endauth  
            </div>
          </div>
        </nav>


        <div class="container">
            @include('flash::message')

            @yield('content')
        </div>
    </body>
</html>