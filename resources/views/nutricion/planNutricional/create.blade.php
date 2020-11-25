@extends('layouts.dashboard')
@section('seccion')
    Plan Nutricional
@endsection

@section('contenido')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <form class="mt-4" action="{{ route('planNutricionals.store') }}" method="POST">
                    @csrf
                     <div class="form-group">
            <label for="users">Paciente</label>
            <select id="users" class="custom-select @error('users') is-invalid @else border-0 @enderror" name="user_id">
                <option value="" disabled selected>--Seleccione un paciente--</option>
                @foreach ($user as $users)
                    <option value="{{ $users->id }}" class="@error('user') is-invalid @else border-0 @enderror">
                        {{ $users->nombre }}
                    </option>
                @endforeach
                @error('users') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </select>
        </div>
                    @include('nutricion.planNutricional._form',['btnText'=>'Guardar'])

                </form>
            </div>
        </div>
    </div>
@endsection
