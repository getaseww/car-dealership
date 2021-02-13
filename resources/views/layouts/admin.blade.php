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
        <nav class="navbar navbar-expand-lg navbar-dark bg-light shadow-sm">
            <div class="container">
                @if (Auth::user()->is_admin)
                    <a class="navbar-brand" href="{{ route('admin.dashboard') }}" style="color:black">
                        {{ __('Dashboard') }}
                    </a>
                @else
                    <a class="navbar-brand" href="{{ route('user.dashboard') }}" style="color:black">
                        {{ __('Dashboard') }}
                    </a>    
                @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" style="color:blue">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
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
                <h6 class="text-uppercase font-weight-bold pt-5">Services</h6>
                <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                <a href="/posts/create" style="text-decoration:none">Commission</a>
                </p>
                <p>
                <a href="/freelancer" style="text-decoration:none">Create Advert</a>
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
