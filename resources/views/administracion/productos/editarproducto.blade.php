@extends('layouts.dashboard')
@section('seccion')
Editar productos
@endsection


@section('contenido')

<form action="{{url('productos/'.$producto->id)}}" method="post">
{{ csrf_field() }}
{{method_field('PATCH')}}

<label for="nombre ">{{'Nombre de producto'}}</label>
<input type="text" name="nombre" id="nombre" value="{{$producto->nombre}}">
<br>
<label for="categoria">{{'Categoria'}}</label>
<input type="text" name="categoria" id="categoria" value="{{$producto->categoria}}">
<br>
<label for="cantidad ">{{'Cantidad'}}</label>
<input type="text" name="cantidad" id="cantidad" value="{{$producto->cantidad}}">
<br>
<label for="unidad_de_medida ">{{'Unidad de medida'}}</label>
<input type="text" name="unidad_de_medida" id="unidad_de_medida" value="{{$producto->unidad_de_medida}}">
<br>
 <input type="submit" value="Editar" class="btn btn-warning" onclick="return confirm('Desea editar?')">
 <a href="{{route('productos.index')}}" class="btn btn-success">Regresar</a>
</form>


@endsection
