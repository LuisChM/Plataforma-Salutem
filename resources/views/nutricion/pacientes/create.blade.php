@extends('layouts.dashboard')
@section('seccion')
Consulta nutricional
@endsection

@section('contenido')
<div class="container my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="mt-4" action="{{route('pacientes.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="users">Paciente(espacio requerido)</label>
                        <select id="users" class="custom-select @error('users') is-invalid @else border-0 @enderror"
                            name="user_id">
                            <option value="" disabled selected>--Seleccione un paciente requerido--</option>
                            @foreach ($user as $users)
                                <option value="{{ $users->id }}" class="@error('user') is-invalid @else border-0 @enderror">
                                    {{ $users->name }}</option>
                            @endforeach
                            @error('users')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </select>
                    </div> 
                    @include('nutricion.pacientes._form',['btnText'=>'Guardar'])
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection
