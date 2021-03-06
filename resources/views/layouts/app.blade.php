<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
 <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
 
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script> <!-- Gem jQuery -->
         <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

            
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-default navbar-expand-md ghost">
              <!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel"> -->

            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
<!--                     <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a> -->
                    <h2 class="hdr-logo">
                <a href="<?php echo URL::to("/")?>" title="PorchLight Real Estate Group">PorchLight Real Estate Group</a>
                </h2>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav main-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link cd-signin " href="#0">Sign in</a></li>
                            <li><a class="nav-link cd-signup" href="#0">Sign up</a></li>
                        @else
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->first_name.' '.Auth::user()->last_name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo URL::to("/")?>/account"" >Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->first_name.' '.Auth::user()->last_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li> -->
                        @endguest
                    </ul>

</div></div></nav>
    <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li><a href="#0">Sign in</a></li>
                <li><a href="#0">New account</a></li>
            </ul>
             <!-- include login-registration-forgot password box here -->
             @include('auth.auth')
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div>
    <input type="hidden" id="url" value="<?php echo URL::to("/")?>">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />


                </div>
            </div>
        </nav>

        @yield('content')
    </div>

   
</body>
</html>
