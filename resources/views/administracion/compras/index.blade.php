@extends('layouts.dashboard')
@section('seccion')
Control de compras
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="responsive-table">
        <div class="d-flex justify-content-end align-content-center">
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2 mr-4">
                    <input type="search" class="form-control searchInput"  placeholder="Buscar producto">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Buscar</button>
            </form>
        </div>
        @include('partial.session-status')

        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Categoria</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad Actual</th>
                    <th scope="col">Unidad de medida</th>
                    <th scope="col">Cantidad agregada</th>
                    <th scope="col">Accion</th>
                </tr>
                
            </thead>
            
            <tbody>
                @foreach ($compra as $compras)
                <tr>
                    <td>{{$compras->categoria}}</td>
                    <td>{{$compras->nombre}}</td>
                    <td>{{$compras->cantidad}}</td>
                    <td>{{$compras->unidad_de_medida}}</td>
                    <td>{{$compras->cantidad_agregada}}</td>
                    
                    <td>
                        <div class="d-flex justify-content-around">
                            {{-- seleccionar dato por id y editarlo --}}
                            <a href="{{route('compras.edit', $compras)}}"><img src="/img/seleccionar.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                            {{-- seleccionar dato por id y eliminarlo --}}
                            
                                    <form method="Post" action="{{route('compras.destroy',$compras)}}">
                                        @csrf @method('delete')
                                        <button class="bg-transparent border-0" type="submit" onclick="return confirm('seguro');"><img
                                            src="/img/basura.svg" class="iconoAccion" alt="eliminar"></button>                                            
                                    </form>

                                </div>
                    </td>
                    
                </tr> 
                                            
                @endforeach
               
                {{ $compra->links()}}
                
            </tbody>
        </table>
        <div class="d-flex justify-content-end mt-5">
                    <a class="btn btn-secondary w-25 p-2" href="{{route('compras.create')}}" role="button">Agregar nueva compra </a>
            
        </div>
    </div>
</div>
@endsection