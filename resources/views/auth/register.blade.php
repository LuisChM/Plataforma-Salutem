@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto ">

                <div class="d-flex justify-content-center mb-4 mt-4">
                    <img src="/img/logo.svg" alt="logo" class="logoIngreso">
                </div>

                <h2>Registrarse</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('Nombre') }}</label>
                        <input id="name" type="text"
                            class="form-control border-0 bg-light shadow-sm @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <label for="surname">{{ __('Apellido') }}</label>
                        <input id="surname" type="text"
                            class="form-control border-0 bg-light shadow-sm @error('surname') is-invalid @enderror"
                            name="surname" value="{{ old('surname') }}" autocomplete="surname" autofocus>

                        @error('surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telephone">{{ __('Teléfono') }}</label>
                        <input id="telephone" type="number"
                            class="form-control border-0 bg-light shadow-sm @error('telephone') is-invalid @enderror"
                            name="telephone" value="{{ old('telephone') }}" autocomplete="telephone" autofocus>

                        @error('telephone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div> --}}


                    <div class="form-group">
                        <label for="email">{{ __('Correo') }}</label>
                        <input id="email" type="email"
                            class="form-control border-0 bg-light shadow-sm @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Contraseña') }}</label>
                        <input id="password" type="password"
                            class="form-control border-0 bg-light shadow-sm @error('password') is-invalid @enderror"
                            name="password" autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control border-0 bg-light shadow-sm"
                            name="password_confirmation" autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block text-white">
                            Registrarse
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
