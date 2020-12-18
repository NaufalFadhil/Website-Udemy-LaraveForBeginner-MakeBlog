<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

        <!-- Bootstrap core CSS -->
        {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}

        <!-- Custom styles for this template -->
        {!! Html::style('css/blog-home.css') !!}

        <style>
            body {
                font-family: 'Lato';
            }
            .fa-btn {
                margin-right: 6px;
            }
        </style>
    </head>

    <body id="app-layout">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <!-- Branding Image -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-link">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            Laravel
                        </a>
                    </li>
                    <li class="nav-link">
                        <a class="navbar-brand" href="{{ url('/home') }}">Home</a>
                    </li>
                </ul>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="nav-link active">
                                <a href="{{ url('/login') }}" class="nav-link">Login</a>
                            </li>
                            <li class="nav-link active">
                                <a href="{{ url('/register') }}" class="nav-link">Register</a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @if (Auth::user()->admin == 1)
                                        <a class="dropdown-item" href="{{ url('/user') }}"><i class="fa fa-btn fa-sign-out active"></i>Admin</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out active"></i>Logout</a>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container mt-5">
            <div class="row">
                @yield('content')
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- Bootstrap core JavaScript -->
        {!! Html::script('vendor/jquery/jquery.min.js') !!}
        {!! Html::script('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    </body>
</html>
