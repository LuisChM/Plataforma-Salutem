@extends('layouts.dashboard')
@section('seccion')
Control costo / gasto
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
   
                <form class="mt-4" enctype="multipart/form-data" action="{{route('facturas.store')}}" method="POST">
                    
                    @include('administracion.facturas._form',['btnText'=>'Guardar'])
    
                </form>
    
            </div>
        </div>
    </div></div>
@endsection
