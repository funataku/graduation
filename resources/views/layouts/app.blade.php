<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico',true) }}">

    <title>Share House Hoppers</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <!--<div class="navbar-header">-->
                     <!--Image and text -->
                    
                <!--      <a class="navbar-brand" href="{{ url('/') }}">-->
                <!--        <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">-->
                <!--        Share House Hoppers-->
                <!--      </a>-->
                    
                    <!--Branding Image -->
                    <!--<a class="navbar-brand" href="{{ url('/') }}">-->
                    <!--    {{ config('app.name', 'Laravel') }}-->
                    <!--</a>-->
                <!--</div>-->

                <!--<div class="collapse navbar-collapse" id="app-navbar-collapse">-->
                     <!--Left Side Of Navbar -->
                <!--    <ul class="nav navbar-nav">-->
                <!--        &nbsp;-->
                <!--    </ul>-->

                     <!--Right Side Of Navbar -->
                <!--    <ul class="nav navbar-nav navbar-right">-->
                         <!--Authentication Links -->
                <!--        @guest-->
                <!--            <li><a href="{{ route('login') }}">Login</a></li>-->
                <!--            <li><a href="{{ route('register') }}">Register</a></li>-->
                <!--        @else-->
                <!--            <li class="dropdown">-->
                <!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>-->
                <!--                    {{ Auth::user()->name }} <span class="caret"></span>-->
                <!--                </a>-->

                <!--                <ul class="dropdown-menu">-->
                <!--                    <li>-->
                <!--                        <a href="{{ route('logout') }}"-->
                <!--                            onclick="event.preventDefault();-->
                <!--                                     document.getElementById('logout-form').submit();">-->
                <!--                            Logout-->
                <!--                        </a>-->

                <!--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
                <!--                            {{ csrf_field() }}-->
                <!--                        </form>-->
                <!--                    </li>-->
                <!--                </ul>-->
                <!--            </li>-->
                <!--        @endguest-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </nav>

        @yield('content')
    </div>

     <!--Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
