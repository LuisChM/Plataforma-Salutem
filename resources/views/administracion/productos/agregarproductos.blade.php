@extends('layouts.dashboard')
@section('seccion')
Agregar Producto
@endsection

@section('contenido')

<form  action="{{url('productos')}}"  method="post">
    <div class="form-group">
{{ csrf_field() }}
<label for="nombre ">{{'Nombre de producto'}}</label>
<input type="text" name="nombre" id="nombre" value="">
<br>
<label for="categoria">{{'Categoria'}}</label>
<input type="text" name="categoria" id="categoria" value="">
<br>
<label for="cantidad ">{{'Cantidad'}}</label>
<input type="text" name="cantidad" id="cantidad" value="">
<br>
<label for="unidad_de_medida ">{{'Unidad de medida'}}</label>
<input type="text" name="unidad_de_medida" id="unidad_de_medida" value="">
<br>
<input type="submit" value="agregar" class="btn btn-success">

<a href="{{route('productos.index')}}" class="btn btn-warning">Regresar</a>
    </div>
</form>

@endsection
