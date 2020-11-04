<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="icon" type="image/svg" href="{{ asset('/img/logo.svg') }}" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>@yield('title','Salutem')</title>
</head>

<body>
    @include('sweet::alert')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="/img/logo.svg" alt="" height="60px" width="60px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('cliente/'.Auth::user()->id) }}">Perfil</a>
                    {{-- <a class="nav-link" href="{{ route('cliente.show', ['pacientes.user_id'=>Auth::user()->id]) }}">Perfil</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Progreso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Plan nutricional</a>
                </li>
            </ul>
            <div class="btn-group ml-auto">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>


    @yield('contenido')

</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"> </script>
<script src="/js/app.js"></script>

</html>
