@extends('administracion.facturas.layout_control')
@section('contenido_factura')
<div class="responsive-table">
    <a class="btn btn-primary" href="{{route('facturas.create')}}" role="button">Agregar nueva factura </a>
    @include('partial.session-status')

    <table class="table table-striped mt-4 text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre de la factura</th>
                <th scope="col">Fecha de facturación</th>
                <th scope="col">Total</th>
                <th scope="col">Acción</th>

            </tr>
        </thead> 
        <tbody>        
            @foreach ($factura as $facturas)
            <tr>
                <td>{{$facturas->nombre}}</td>
                <td>{{$facturas->fecha}}</td>
                <td>{{$facturas->total}}</td>
                <td>
                    <div class="d-flex justify-content-around">
                        <a href="#1"><img src="/img/seleccionar.svg" class="iconoAccion" alt="seleccionar"></a>
                        <a href="#1"><img src="/img/basura.svg" class="iconoAccion" alt="eliminar"></a>
                    </div>
                </td>
            </tr>  @endforeach
        {{ $factura->links()}}
        </tbody>
      

    </table>

</div>@endsection
