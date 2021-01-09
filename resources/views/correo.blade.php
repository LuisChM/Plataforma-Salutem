@extends('layouts.dashboard')
@section('seccion')
Usuarios
@endsection

@section('contenido')
<div class="container mt-5">

    <div class="responsive-table">

        <div class="d-flex justify-content-end align-content-center">
            {{ Form::open(['route' => 'users.index', 'method' => 'GET', 'class' => 'form-inline']) }}
            <div class="form-group mx-sm-3 mb-2 mr-4">
                {{ Form::text('name', null, ['class' => 'form-control searchInput', 'placeholder' => 'Buscar usuario']) }}
            </div>
            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
            {{ Form::close() }}
        </div>

        <a class="btn btn-primary" href="{{route('users.create')}}" role="button">Agregar nuevo usuario </a>

        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                <tr>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            {{-- seleccionar dato por id y editarlo --}}
                            <a href="{{route('users.edit', $users)}}"><img src="/img/seleccionar.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                            {{-- seleccionar dato por id y eliminarlo --}}

                            <form method="Post" action="{{route('users.destroy',$users)}}">
                                @csrf @method('delete')
                                <button class="bg-transparent border-0 delete-confirm" type="submit"><img src="/img/basura.svg" class="iconoAccion"
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