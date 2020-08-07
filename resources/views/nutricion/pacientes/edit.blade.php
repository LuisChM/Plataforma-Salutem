@extends('layouts.dashboard')
@section('seccion')
paciente nutricional
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <form class="mt-4" action="{{route('pacientes.update',$paciente)}}" method="POST">
                    @method('PATCH')
                    @include('nutricion.pacientes._form',['btnText'=>'Guardar paciente'])

                </form>

            </div>
        </div>
    </div>
</div> 
@endsection
