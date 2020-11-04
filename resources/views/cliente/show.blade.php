@extends('layouts.perfilUsuario')
@section('contenido')
    <div class="container mt-5">
        <div class="form-group">
            <label for="logrosPlan">Logros del plan nutricional
            </label>
            <input type="text" class="form-control " name="logrosPlan" id="logrosPlan" disabled placeholder="Ingrese logrosPlan"
                value="{{ $paciente->logrosPlan }}">
        </div>
    </div>

@endsection
