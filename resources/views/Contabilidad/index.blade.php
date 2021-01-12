@extends('layouts.dashboard')
@section('seccion')
Administracion contable
@endsection

@section('contenido')

<div class="container mt-5">
    <div class="responsive-table">
        <a class="btn btn-primary mb-3" href="{{route('contabilidads.create')}}" role="button">Agregar contabilidad </a>
        
        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Ingresos</th>
                    <th scope="col">Egresos</th>
                    <th scope="col">Saldo del día</th>
                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contable as $contabilidad)
                <tr>
                    <td>{{$contabilidad->fecha}}</td>
                    <td>{{$contabilidad->ingresos}}</td>
                    <td>{{$contabilidad->gastos}}</td>
                    <td>{{$contabilidad->total}}</td>
                    
                    <td>
                        <div class="d-flex justify-content-around">
                            {{-- seleccionar dato por id y editarlo --}}
                            <a href="{{route('contabilidads.edit',Crypt::encrypt($contabilidad->id))}}"><img src="/img/seleccionar.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                            <a href="{{route('contabilidads.show',Crypt::encrypt($contabilidad->id))}}"><img src="/img/anadir.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                            {{-- seleccionar dato por id y eliminarlo --}}

                            <form method="Post" action="{{route('contabilidads.destroy',$contabilidad)}}">
                                @csrf @method('delete')
                                <button class="bg-transparent border-0 delete-confirm" type="submit"><img src="/img/basura.svg" class="iconoAccion"
                                    alt="eliminar"></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>

        {{ $contable->links()}}


    </div>
</div>
@endsection

