<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gozamen Hotel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/svg-with-js.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/v4-shims.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-5.12.1-web/css/all.min.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
        .page-footer{
            background-color:springgreen;
        }
        .h5{
            color:black;
        }
        .ul.li.a{
            color: black;
        }
        .p.a{
            color: black;
        }
    
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/eduna.jpg" alt="Eduna" style="height:25px" class="rounded" style="color:white">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" style="padding-left:30px">
                        <li class="nav-item"><a class="nav-link" href="/" style="color:white">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('houses') }}" style="color:white">House</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cars') }}" style="color:white">Car</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact.create') }}" style="color:white">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}" style="color:white">About</a></li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li class="nav-item" style="padding-left:5px">
                                <a class="nav-link btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->is_admin)
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                            {{ __('Dashboard') }}
                                        </a>
                                    @else
                                        <a class="dropdown-item" href="{{ route('user.dashboard') }}">
                                            {{ __('Dashboard') }}
                                        </a>    
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

        
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
<footer class="page-footer font-small unique-color-dark">
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
    
        <!-- Grid row -->
        <div class="row mt-3">
    
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
    
            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold pt-5">About</h6>
            <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p><a href="/" class="text-uppercase" style="text-decoration:none">edunacommission.com</a> is a platform to connect car and house sellers to buyers in one place.</p>
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold pt-5">Pages</h6>
            <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
            <a href="{{ route('contact.create') }}" style="text-decoration:none">Contact Us</a>
            </p>
            <p>
            <a href="{{ route('about') }}" style="text-decoration:none">About Us</a>
            </p>
            <p>
            <a href="/jobs" style="text-decoration:none"></a>
            </p>
    
        </div>
    
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold pt-5">Contact Us</h6>
            <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p><i class="fa fa-envelope mr-3"></i>davo3star@gmail.com</p>
            <p>
            <i class="fa fa-phone mr-3"></i> + 251911826340</p>
            <p>
            <i class="fa fa-phone mr-3"></i> +251904105514 </p>
        </div>

        </div>
        
    </div>

    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        <p class="text-center"><i class="fa fa-copyright" aria-hidden="true"></i>Edunacommission.com 2020, All rights reserved. Developed by Getasew(+251965865274)</p>
    </div>
    <!-- Copyright -->
    
    </footer>
</body>
</html>
