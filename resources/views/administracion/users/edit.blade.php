@extends('layouts.dashboard')
@section('seccion')
Usuarios
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="mt-4" action="{{route('users.update',$user)}}" method="POST"> 
                    @method('PATCH')
                    @include('administracion.users._form',['btnText'=>'Actualizar'])
                </form>
            </div>
        </div>
    </div></div>
@endsection
