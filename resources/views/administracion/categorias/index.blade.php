@extends('layouts.dashboard')
@section('seccion')
Control de categorias
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="responsive-table">
        <a class="btn btn-primary" href="{{route('categorias.create')}}" role="button">Agregar nueva categoria </a>

        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre de la categoria</th>
                    
                    <th scope="col">Accion</th>
                </tr>
                
            </thead>
            <tbody>
                @foreach ($categoria as $categorias)
                <tr>
                    <td>{{$categorias->tipoCategoria}}</td>
                                        
                    <td>
                        <div class="d-flex justify-content-around">
                            {{-- seleccionar dato por id y editarlo --}}
                            <a href="{{route('categorias.edit', $categorias)}}"><img src="/img/seleccionar.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                            {{-- seleccionar dato por id y eliminarlo --}}
                            <form method="Post" action="{{route('categorias.destroy',$categorias)}}">
                                @csrf @method('delete')
                                
                                <button class="bg-transparent border-0" type="submit" onclick="return confirm('Esta seguro de eliminar el dato');"><img
                                    src="/img/basura.svg" class="iconoAccion" alt="eliminar"></button>                                            
                            </form>
                        </div>
                    </td>
                    
                </tr> 
                                            
                @endforeach
               
                {{ $categoria->links()}}

            </tbody>


            
        </table>



    </div>
</div>
@endsection