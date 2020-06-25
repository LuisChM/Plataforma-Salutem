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
                    <td>rol por definir</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            <a href="#1"><img src="/img/seleccionar.svg" class="iconoAccion" alt="seleccionar"></a>
                            <a href="#1"><img src="/img/basura.svg" class="iconoAccion" alt="eliminar"></a>
                        </div>
                    </td>
                </tr> @endforeach
                {{ $user->links()}}
            </tbody>


        </table>

    </div>
</div>
@endsection