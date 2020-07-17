@extends('layout_dashboard')
@section('seccion')
Usuarios
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="responsive-table">
        {{-- <a class="btn btn-primary" href="{{route('facturas.create')}}" role="button">Agregar nueva factura </a> --}}
        @include('partial.session-status')

        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                <tr>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>
                        {{$users->roles->pluck('display_nombre')->implode(', ')}}
                    </td>
                    <td>
                        <div class="d-flex justify-content-around">
                            {{-- seleccionar dato por id y editarlo --}}
                            <a href="{{route('users.edit', $users)}}"><img src="/img/seleccionar.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                            {{-- seleccionar dato por id y eliminarlo --}}

                            <form method="Post" action="{{route('users.destroy',$users)}}">
                                @csrf @method('delete')
                                <button class="bg-transparent border-0" type="submit"
                                    onclick="return confirm('seguro');"><img src="/img/basura.svg" class="iconoAccion"
                                        alt="eliminar"></button>
                            </form>
                        </div>
                    </td>
                </tr> @endforeach
                {{ $user->links()}}
            </tbody>


        </table>

    </div>
</div>
@endsection