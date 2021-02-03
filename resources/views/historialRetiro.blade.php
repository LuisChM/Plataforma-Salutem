@extends('layouts.dashboard')
@section('seccion')
Historial Retiro Producto 
@endsection

@section('contenido')
<div class="container mt-5">

    <div class="responsive-table">

        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad Inventario</th>
                    <th scope="col">Cantidad Extraido</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($historial as $historials)
                <tr>
                    <td>{{$historials->user->name}}</td>
                    <td>{{$historials->nombre}}</td>
                    <td>{{implode($historials->old_values)}}</td>
                    <td>{{implode($historials->new_values)}}</td>
                    
                </tr> @endforeach
            </tbody>
        </table>
        
        {{ $historial->links()}}

    </div>
</div>
@endsection