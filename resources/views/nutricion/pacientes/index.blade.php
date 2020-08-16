@extends('layouts.dashboard')
@section('seccion')
    Pacientes
@endsection

@section('contenido')
    <div class="container mt-5">
        <div class="responsive-table">

            {{-- buscar paciente --}}
            <div class="d-flex justify-content-end align-content-center">
                {{ Form::open(['route' => 'pacientes.index', 'method' => 'GET', 'class' => 'form-inline']) }}
                <div class="form-group mx-sm-3 mb-2 mr-4">
                    {{ Form::text('name', null, ['class' => 'form-control searchInput', 'placeholder' => 'Buscar paciente']) }}
                </div>
                <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                {{ Form::close() }}
            </div>
            {{-- /buscar paciente --}}

            <a class="btn btn-primary" href="{{ route('users.create') }}" role="button">Agregar nuevo paciente </a>
            @include('partial.session-status')
            <table class="table table-striped mt-4 text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        {{-- <th scope="col">Rol</th> --}}
                        <th scope="col">Acción</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($paciente as $pacientes)
                        <tr>
                            <td>{{ $pacientes->nombre }}</td>
                            {{-- <td>{{ $pacientes->email }}</td> --}}
                            {{-- <td>
                                {{ $pacientes->roles->pluck('display_nombre')->implode(', ') }}
                            </td> --}}
                            <td>
                                <div class="d-flex justify-content-around">
                                    {{-- seleccionar dato por id y editarlo
                                    --}}
                                    <a href="{{ url('paciente/'.$pacientes->id.'/edit' )}}"><img src="/img/seleccionar.svg"
                                            class="iconoAccion" alt="seleccionar"></a>

                                    {{-- seleccionar dato por id y eliminarlo
                                    --}}

                                    <form method="Post" action="{{ route('pacientes.destroy', $paciente) }}">
                                        @csrf @method('delete')
                                        <button class="bg-transparent border-0" type="submit"
                                            onclick="return confirm('seguro');"><img src="/img/basura.svg"
                                                class="iconoAccion" alt="eliminar"></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $paciente->links() }}

        </div>

    </div>

@endsection
