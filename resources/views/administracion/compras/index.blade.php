@extends('layout_dashboard')
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Cantidad Actual</th>
                    <th scope="col">Unidad de medida</th>
                    <th scope="col">Agregar</th>
                    <th scope="col">Accion</th>
                </tr>
                <tbody>
                    <tr>
                        <td>Producto</td>
                        <td>Tipo</td>
                        <td>18kg</td>
                        <td><select>
                                <option value="" disabled selected>Seleccione una medida</option>
                                <option value="1">kg</option>
                                <option value="2">gr</option>
                                ¿
                            </select></td>
                            <td><input type="number" min="1" class="text-center" placeholder="1" pattern="^[0-1000]+"></td>
                        <td>
                            <div class="d-flex justify-content-around ">
                                <a href="#1"><img src="/img/check.svg" class="iconoAccion" alt="seleccionar"></a>
                            </div>
                        </td>
                    </tr>
    
    
                </tbody>
            </thead>
            
            <tbody>
                @foreach ($compra as $compras)
                <tr>
                    <td>{{$compras->nombre}}</td>
                    <td>{{$compras->categoria}}</td>
                    <td>{{$compras->cantidad}}</td>
                    <td>{{$compras->unidad}}</td>
                    <td>{{$compras->agregar}}</td>
                    <td>{{$compras->accion}}</td>
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
            
                
                    <button type="submit" class="btn btn-primary mr-4 w-25 p-2">Generar Lista</button>
                    
                    <a class="btn btn-secondary w-25 p-2" href="{{route('compras.create')}}" role="button">Agregar nueva compra </a>
            
        </div>
    </div>
</div>
@endsection