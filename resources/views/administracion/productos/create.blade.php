@extends('layouts.dashboard')
@section('seccion')
Productos
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <form class="mt-4" action="{{route('productos.store')}}" method="POST">
                    @include('administracion.productos._form',['btnText'=>'Guardar'])

                </form>

            </div>
        </div>
    </div>
</div>
@endsection