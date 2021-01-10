@extends('layouts.dashboard')
@section('seccion')
Administracion contable
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="mt-4" action="{{route('contabilidads.update',$contabilidad)}}" method="POST"> 
                    @method('PATCH')
                    @include('Contabilidad._form',['btnText'=>'Actualizar'])
                </form>
            </div>
        </div>
    </div></div>
@endsection