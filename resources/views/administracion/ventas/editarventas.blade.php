@extends('layouts.dashboard')
@section('seccion')
Editar Comida
@endsection


@section('contenido')
<a href="{{route('ventas.index')}}" class="btn btn-warning">Regresar</a>
<div class="row justify-content-center " >
    <div class="col-sm-8 align-self-center text-center">

<form action="{{url('ventas/'.$ventas->id)}}" method="post">
{{ csrf_field() }}
{{method_field('PATCH')}}

<label for="nombre_comida ">{{'Nombre de producto'}}</label>
<input  class="form-control" type="text" name="nombre_comida" id="nombre_comida" value="{{$ventas->nombre_comida}}">
<br>
<label for="descripcion">{{'Descripcion'}}</label>
<br>
<textarea class="form-control" id="descripcion" name="descripcion" rows="4" cols="50" value="">{{$ventas->descripcion}} </textarea>
<br>
<label for="precio ">{{'Precio'}}</label>
<input class="form-control" type="text" name="precio" id="precio" value="{{$ventas->precio}}">

<br>
 <input type="submit" value="Editar" class="btn btn-success" onclick="return confirm('Desea editar?')">

</form>

</div>
</div>

@endsection
