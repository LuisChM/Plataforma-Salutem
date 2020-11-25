@extends('layouts.dashboard')
@section('seccion')
Estadisticas
@endsection


@section('contenido')
<div class="container mt-5">

<div>
    <a href="{{route('estadisticasventas.index')}}" class="btn btn-primary mb-2">Grafico de comidas mas vendidas</a>

</div>

    <div class="responsive-table">
        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre Comida </th>

                    <th scope="col">Cantidad Vendidas</th>

                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($venta as $ventas)

                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$ventas->nombre_comida}}</td>
                <td>{{$ventas->cantidad}}</td>


                    <td>

                        <form method="POST" action="{{url('ventas/'.$ventas->id)}}">
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}

                             <a href="{{url('estadisticascomida/'.$ventas->id.'/edit')}}"><img src="/img/anadir.svg"
                                class="iconoAccion" alt="seleccionar"></a>

                                <a href="{{url('estadisticasventas/'.$ventas->id.'/edit')}}"><img src="/img/basura.svg"
                                    class="iconoAccion" alt="seleccionar"></a>

                        </form>

                      </td>

                 @endforeach

            </tbody>
        </table>

    </div>

</div>
@endsection
