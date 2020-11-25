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
                    @include('nutricion.planNutricional._form',['btnText'=>'Guardar'])

                </form>
            </div>
        </div>
    </div>
@endsection
