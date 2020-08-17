@extends('layouts.dashboard')
@section('seccion')
Editar productos
@endsection


@section('contenido')

 <a href="{{route('productos.index')}}" class="btn btn-warning" >Regresar</a>

<div class="row justify-content-center " >
    <div class="col-sm-8 align-self-center text-center">

<form action="{{url('productos/'.$producto->id)}}" method="post"  style="margin:0 auto">
{{ csrf_field() }}
{{method_field('PATCH')}}

<label for="nombre ">{{'Nombre de producto'}}</label>
<input class="form-control" type="text" name="nombre" id="nombre" value="{{$producto->nombre}}">
<br>
<label for="cantidad ">{{'Cantidad'}}</label>
<input class="form-control" type="text" name="cantidad" id="cantidad" value="{{$producto->cantidad}}">
<br>
<label for="unidad_de_medida ">{{'Unidad de medida'}}</label>
<input  class="form-control" type="text" name="unidad_de_medida" id="unidad_de_medida" value="{{$producto->unidad_de_medida}}">
<br>
 <input type="submit" value="Editar" class="btn btn-success" onclick="return confirm('Desea editar?')">

</form>

</div>
</div>
@endsection
