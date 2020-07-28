@extends('layout_dashboard')
@section('seccion')
Control de compras
@endsection

@section('contenido')
<html lang="{{ app()->getLocale() }}">
   
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
                    <th scope="col">Producto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Unidad de medida</th>
                    <th scope="col">Cantidad a agregar</th>
                    <th scope="col">Accion</th>
                </tr>
                <tbody>
                    @foreach ($productos as $producto)
                    
                   <tr>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->categoria}}</td>
                       <td>{{$producto->cantidad}}</td>
                       <td><select {{$producto->unidad_de_medida}}>
                        <option value="" disabled selected>Seleccione unidad de medida</option>
                        <option value="1">kg</option>
                        <option value="2">gr</option>
                    </select></td>
                       
                       <td><input type="number" min="1" class="text-center" placeholder="1" pattern="^[0-1000]+"></td>
                       
                       <td>
                        <div class="d-flex justify-content-around">
                       <a href="{{url('productos/'.$producto->id.'/edit')}}"><img src="/img/seleccionar.svg"
                        class="iconoAccion" alt="seleccionar"></a>
                       {{-- <form method="POST" action="{{url('productos/'.$producto->id)}}">
                         {{ csrf_field() }}
                         {{method_field('DELETE')}}
                          <a type="submit" onclick="return confirm('Desea Borrar?')"> <img src="/img/basura.svg" class="iconoAccion"
                          alt="eliminar">
                     </form> --}}
                     <div class="d-flex justify-content-around ">
                        <a href="#1"><img src="/img/check.svg" class="iconoAccion" alt="seleccionar"></a>
                    </div>
                    
                    {{-- <form method="Post" action="{{route('compras.destroy',$compras)}}">
                        @csrf @method('delete')
                        <button class="bg-transparent border-0" type="submit" onclick="return confirm('seguro');"><img
                            src="/img/check.svg" class="iconoAccion" alt="eliminar"></button>                                            
                    </form> --}}
                    </div>
                       </td>

                     </td>
                    
                   </tr>
                    
                    @endforeach
                    
                 </tbody>
              

            
                    {{-- <td>
                        <select name="categoria" id="tipoCategoria" class="form-control input-lg dynamic" data-dependent="tipoCategoria"> 
                            <option value=""> --Escoja el producto--</option>   
                                @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{ ucfirst($categoria->tipoCategoria)}}</option>
                                @endforeach
                            </select>
                        </td>
                    <td >
                             <select name="nombre" id="nombre" class="form-control input-lg dynamic" data-dependent="tipoCategoria"> 
                            <option value=""> --Escoja el producto--</option>    
                                @foreach ($productos as $producto)
                            <option value="{{$producto['id']}}">{{$producto['nombre']}}</option>
                                @endforeach
                            </select> 
                        </td>  --}}
                        {{-- <td> 
                            @foreach ($productos as $producto)
                            <option value="{{$producto['cantidad']}}">{{$producto['cantidad']}}</option>
                            @endforeach  
                        </td> --}} 
                    </tbody>
            </thead>
            
           
        </table>



<div class="d-flex justify-content-end mt-5">
    <a class="btn btn-primary mr-3" href="{{route('compras.index')}}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{$btnText ?? ''}}</button>
</div>


@endsection