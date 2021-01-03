<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>New Bell System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
    #login .container #login-row #login-column #login-box {
        max-width: 600px;
        border: 1px solid #9C9C9C;
    }

    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }

    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }

    .link .link:hover {
        text-decoration: none;
    }
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>

<body class="bg-white">
    <div id="app">

        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10">
                    <nav class="navbar navbar-expand-md navbar-light bg-white">
                        @guest
                        <a class="btn btn-primary px-3 rounded-pill" href="{{ url('/') }}">
                            Bell <i class="fas fa-bell"></i> Panasonic
                        </a>
                        @else
                        <a class="btn btn-primary px-3 rounded-pill" href="{{ url('/home') }}">
                            Bell <i class="fas fa-bell"></i> Panasonic
                        </a>
                        @endguest
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="/changes">
                                            {{ __('Change Sound') }}
                                        </a>

                                        <a class="dropdown-item" href="/changep">
                                            {{ __('Change Password') }}
                                        </a>

                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                </div>
                </nav>
            </div>
        </div>


        <main class="my-5">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body>

</html>