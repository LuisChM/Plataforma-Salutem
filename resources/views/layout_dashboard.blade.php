<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/normalize.css">

    <title>@yield('title','Dashboard')</title>
</head>

<body>
    <div id="app">
        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="d-flex justify-content-center mb-4 mt-4">
                    <img src="/img/logo.svg" alt="logo" class="logoMenu">
                </div>
                <div class="list-group list-group-flush">
                    <!-- Contenedor -->
                    <ul id="accordion" class="accordion pl-0">
                        {{-- Administración --}}
                        <li>
                            <div class="link">Administración<img src="/img/flecha.svg" alt="arrow"
                                    class="iconoFlecha ml-2"></i>
                            </div>
                            <ul class="submenu px-2">
                                <li> <a href="{{route('productos')}}">Productos</a></li>
                                <li> <a href="{{route('categorias.index')}}">Categorías deProductos</a></li>
                                <li><a href="{{route('facturas.index')}}">Control costo / gasto</a></li>
                                <li> <a href="#">Historial productos</a>
                                </li>
                                <li> <a href="{{route('compras.index')}}">Compra de productos</a>
                                <li> <a href="{{route('users.index')}}">Usuarios</a>
                                <li> <a href="#">Roles</a>
                                </li>
                            </ul>
                        </li>
                        {{-- /Administración --}}

                        {{-- Nutrición --}}
                        <li>
                            <div class="link">Nutrición<img src="/img/flecha.svg" alt="arrow"
                                    class="iconoFlecha ml-2"></i>
                            </div>
                            <ul class="submenu px-2">
                                <li> <a href="#">Consulta nutricional</a></li>
                                <li> <a href="#">Pacientes</a></li>
                                <li> <a href="#">Cálculo de dieta</a></li>
                            </ul>
                        </li>
                        {{-- /Nutrición --}}

                        {{-- Comunidad --}}
                        <li>
                            <div class="link">Comunidad<img src="/img/flecha.svg" alt="arrow"
                                    class="iconoFlecha ml-2"></i>
                            </div>
                            <ul class="submenu px-2">
                                <li> <a href="#">Preguntas</a></li>
                                <li> <a href="#">Mejor valoradas</a></li>
                                <li> <a href="#">Más leídas</a></li>
                            </ul>
                        </li>
                        {{-- /Comunidad --}}

                    </ul>

                </div>
            </div>
            <!-- /#sidebar-wrapper -->



            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                    <button class="navbar-toggler" type="button" id="menu-toggle">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <h5 class="ml-2 mb-0">@yield('seccion')</h5>


                    <div class="btn-group ml-auto">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                </nav>

                @yield('contenido')

            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

</body>

<script src="/js/app.js"></script>

</html>
