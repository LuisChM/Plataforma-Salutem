@extends('layouts.dashboard')
@section('seccion')
Productos
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="responsive-table">
        <a class="btn btn-primary" href="{{route('productos.create')}}" producto="button">Agregar nuevo producto </a>
        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre </th>
                    <th scope="col">Cantidad disponible</th>
                    <th scope="col">Unidad de medida</th>
                     <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($producto as $productos)
                <tr>
                    <td>{{$productos->nombre}}</td>
                    <td>{{$productos->cantidad}}</td>
                    <td>{{$productos->unidad_de_medida}}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                             {{-- seleccionar dato por id y editarlo --}}
                             <a href="{{route('productos.edit', $productos)}}"><img src="/img/seleccionar.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                             {{-- seleccionar dato por id y eliminarlo --}}

                             <form method="Post" action="{{route('productos.destroy',$productos)}}">
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
         {{ $producto->links()}}



    </div>
</div>
@endsection
