@extends('layouts.dashboard')
@section('seccion')
Compra
@endsection

@section('contenido')

<form  action="{{url('')}}"  method="post">
<div class="form-group">
{{ csrf_field() }}
<label for="nombre_comida ">{{'Nombre de comida'}}</label>
<input type="text" name="nombre_comida" id="nombre_comida" value="">
<br>
<label for="descripcion">{{'Descripcion'}}</label>
<br>
<textarea id="descripcion" name="descripcion" rows="4" cols="50"> </textarea>

<br>
<label for="precio ">{{'Precio'}}</label>
<input type="text" name="precio" id="precio" value="">
<br>
<input type="submit" value="agregar" class="btn btn-success">

<a href="{{route('')}}" class="btn btn-warning">Regresar</a>
    </div>
</form>

@endsection
