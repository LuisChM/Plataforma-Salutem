@extends('layout')

@section('title')
Iniciar sesión
@endsection

@section('content')


<div class="container pb-5">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto ">

            <div class="d-flex justify-content-center mb-4 mt-4">
                <img src="/img/logo.svg" alt="logo" class="logoIngreso">
            </div>                

            <h2>Iniciar sesión</h2>

            <form action="" method="">
                @csrf
                <div class="form-group ">
                    <label for="correo">Correo:</label><br>
                    <input class="form-control border-0 bg-light shadow-sm" type="email" id="correo" placeholder="Ingrese su correo" name="correo">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label><br>
                    <input class="form-control border-0 bg-light shadow-sm" type="password" id="password"
                        placeholder="Ingrese su contraseña" name="password">
                </div>
                <div class="form-group">
                    <a class="btn-link" href="#">¿Olvidó su contraseña?</a>
                </div>

                <button type="button" class="btn btn-primary btn-lg btn-block text-white">
                    Ingresar
                </button>

            </form>
        </div>
    </div>
</div>
@endsection
