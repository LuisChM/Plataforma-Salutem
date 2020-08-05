@extends('layouts.dashboard')
@section('seccion')
Productos
@endsection

@section('contenido')
<div class="container mt-5">

    <div class="d-flex justify-content-end align-content-center">
        <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2 mr-4">
                <input type="search" class="form-control searchInput"  placeholder="Buscar producto">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
        </form>
    </div>
<div>
    <a href="{{route('agregarproductos')}}" class="btn btn-success">Agregar nuevo productos</a>
</div>
    <div class="responsive-table">
        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre </th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Cantidad disponible</th>
                    <th scope="col">Unidad de medida</th>
                   <!-- <th scope="col">Obtener</th>-->
                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>
               @foreach ($productos as $producto)

              <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$producto->nombre}}</td>
                  <td>{{$producto->categoria}}</td>
                  <td>{{$producto->cantidad}}</td>
                  <td>{{$producto->unidad_de_medida}}</td>
                  <td>

                  <form method="POST" action="{{url('productos/'.$producto->id)}}">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}

                     <a href="{{url('productos/'.$producto->id.'/edit')}}"><img src="/img/seleccionar.svg"
                        class="iconoAccion" alt="seleccionar"></a>

                        <form method="Post" action="{{route('productos.destroy',$productos)}}">
                            @csrf @method('delete')
                            <button class="bg-transparent border-0" type="submit" onclick="return confirm('Esta seguro de eliminar el dato');"><img
                                src="/img/basura.svg" class="iconoAccion" alt="eliminar"></button>
                        </form>
                </form>

                </td>
                @endforeach

            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
            <a class="btn btn-secondary w-25 p-2" href="{{route('compras.create')}}" role="button">Imprimir lista </a>
        </div>
    </div>

</div>
@endsection
