@extends('layouts.dashboard')
@section('seccion')
Hoja de Seguimiento
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <form class="mt-4" action="{{route('seguimientos.update',$hojaSeguimiento)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    @include('nutricion.hojaSeguimiento._form',['btnText'=>'Guardar'])
                    <a class="btn btn-primary ml-3" href="{{ route('pacientes.edit', $hojaSeguimiento->paciente_id) }}" role="button">Volver</a>
                   
                </form>
    
            </div>
        </div>
    </div>
</div>

@endsection