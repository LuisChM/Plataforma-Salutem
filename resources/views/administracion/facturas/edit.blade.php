@extends('layout_dashboard')
@section('seccion')
Control costo / gasto
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="mt-4" enctype="multipart/form-data" action="{{route('facturas.update',$factura)}}"
                    method="POST">
                    @method('PATCH')
                    @include('administracion.facturas._form',['btnText'=>'Actualizar'])

                </form>
            </div>
        </div>
    </div>
</div>
@endsection