@extends('layouts.dashboard')
@section('seccion')
Control costo / gasto
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="responsive-table">
        <a class="btn btn-primary mb-3" href="{{route('facturas.create')}}" role="button">Agregar nueva factura </a>
        
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
                            {{-- seleccionar dato por id y editarlo --}}
                            <a href="{{route('facturas.edit', $facturas)}}"><img src="/img/seleccionar.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                            {{-- seleccionar dato por id y eliminarlo --}}

                            <form method="Post" action="{{route('facturas.destroy',$facturas)}}">
                                @csrf @method('delete')
                                <button class="bg-transparent border-0 delete-confirm" type="submit"><img src="/img/basura.svg" class="iconoAccion"
                                    alt="eliminar"></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>

        {{ $factura->links()}}


    </div>
</div>
@endsection
