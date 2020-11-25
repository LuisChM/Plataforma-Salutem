@extends('layouts.dashboard')
@section('seccion')
Plan nutricional
@endsection

@section('contenido')
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <form class="mt-4" action="{{route('planNutricionals.update', $planNutricional)}}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    @include('nutricion.planNutricional._form',['btnText'=>'Guardar'])

                </form>
            </div>
    </div>
</div>
@endsection