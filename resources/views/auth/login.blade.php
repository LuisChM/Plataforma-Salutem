@extends('layouts.app')

@section('content')
<div class="container pb-5">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto ">

            <div class="d-flex justify-content-center mb-4 mt-4">
                <img src="/img/logo.svg" alt="logo" class="logoIngreso">
            </div>

            <h2>Iniciar sesión</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group ">
                    <label for="email">Correo:</label><br>
                    <input id="email" type="email" placeholder="Ingrese su correo"
                        class="form-control border-0 bg-light shadow-sm @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label><br>
                    <input id="password" type="password" placeholder="Ingrese su contraseña"
                        class="form-control border-0 bg-light shadow-sm @error('password') is-invalid @enderror"
                        name="password"  autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <div class="d-flex justify-content-around flex-wrap align-items-center py-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recordar contraseña') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            ¿Olvidó su contraseña?
                        </a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block text-white">
                        Ingresar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
