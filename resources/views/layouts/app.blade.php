<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="data:image/png;base64,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">
    

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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profil/edit">
                                        {{ __('Edit Profil') }}
                                    </a>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
