@extends('layouts.dashboard')
@section('seccion')
Roles
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="mt-4" enctype="multipart/form-data" action="{{route('roles.update',$role)}}" method="POST"> 
                    @method('PATCH')
                    @include('administracion.roles._form',['btnText'=>'Actualizar'])
                </form>
            </div>
        </div>
    </div></div>
@endsection
