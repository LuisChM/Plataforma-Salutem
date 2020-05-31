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
                    <div id="accordion">
                        {{-- Administración --}}
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1"
                                        aria-expanded="true" aria-controls="collapse1">
                                        Administración </button>
                                </h5>
                            </div>
                            <div id="collapse1" class="collapse " arial-labelledby="heading1" data-parent="#accordion">
                                <div class="list-group">
                                    <a href="{{route('productos')}}"
                                        class="list-group-item list-group-item-action">Productos</a>
                                    <a href="#" class="list-group-item list-group-item-action">Categorías de
                                        Productos</a>
                                    <a href="{{route('agregar')}}"
                                        class="list-group-item list-group-item-action">Control costo / gasto</a>
                                    <a href="#" class="list-group-item list-group-item-action">Historial productos</a>
                                    <a href="#" class="list-group-item list-group-item-action">Compra de productos</a>
                                </div>
                            </div>
                        </div>
                        {{-- /Administración --}}

                        {{-- Nutrición --}}
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2"
                                        aria-expanded="true" aria-controls="collapse2">
                                        Nutrición </button>
                                </h5>
                            </div>
                            <div id="collapse2" class="collapse " arial-labelledby="heading2" data-parent="#accordion">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">Consulta nutricional</a>
                                    <a href="#" class="list-group-item list-group-item-action">Pacientes</a>
                                    <a href="#" class="list-group-item list-group-item-action">Cálculo de dieta</a>
                                </div>
                            </div>
                        </div>
                        {{-- /Nutrición --}}

                        {{-- Comunidad --}}
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3"
                                        aria-expanded="true" aria-controls="collapse3">
                                        Comunidad </button>
                                </h5>
                            </div>
                            <div id="collapse3" class="collapse " arial-labelledby="heading3" data-parent="#accordion">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">Preguntas</a>
                                    <a href="#" class="list-group-item list-group-item-action">Mejor valoradas</a>
                                    <a href="#" class="list-group-item list-group-item-action">Más leídas</a>
                                </div>
                            </div>
                        </div>
                        {{-- /Comunidad --}}


                    </div>
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
                        <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Name
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">Mi perfil</button>
                            <button class="dropdown-item" type="button">Cerrar sesión</button>
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
