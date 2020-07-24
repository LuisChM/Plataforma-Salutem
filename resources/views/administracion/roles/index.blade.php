@extends('layouts.dashboard')
@section('seccion')
Roles
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="responsive-table">
        <a class="btn btn-primary" href="{{route('roles.create')}}" role="button">Agregar nueva rol </a>
        @include('partial.session-status')

        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Rol</th>
                    <th scope="col">Nombre Rol</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($role as $roles)
                <tr>
                    <td>{{$roles->nombre}}</td>
                    <td>{{$roles->display_nombre}}</td>
                    <td>{{$roles->descripcion}}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            {{-- seleccionar dato por id y editarlo --}}
                            <a href="{{route('roles.edit', $roles)}}"><img src="/img/seleccionar.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                            {{-- seleccionar dato por id y eliminarlo --}}
                            
                                    <form method="Post" action="{{route('roles.destroy',$roles)}}">
                                        @csrf @method('delete')
                                        <button class="bg-transparent border-0" type="submit" onclick="return confirm('seguro');"><img
                                            src="/img/basura.svg" class="iconoAccion" alt="eliminar"></button>                                            
                                    </form>
                                </div>
                    </td>
                </tr> 
                @endforeach
               
                {{ $role->links()}}

            </tbody>
        </table>



    </div>
</div>
@endsection