@extends('layouts.dashboard')
@section('seccion')
Control categorias
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
   
                <form class="mt-4" enctype="multipart/form-data" action="{{route('categorias.store')}}" method="POST">
                    @include('administracion.categorias.form',['btnText'=>'Guardar'])
    
                </form>
    
            </div>
        </div>
    </div></div>
@endsection
