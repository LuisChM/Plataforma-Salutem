@extends('layouts.dashboard')
@section('seccion')
Agregar Producto
@endsection

@section('contenido')

<a href="{{route('productos.index')}}" class="btn btn-warning">Regresar</a>
<div class="row justify-content-center " >
    <div class="col-sm-8 align-self-center text-center">

<form  action="{{url('productos')}}"  method="post">
    <div class="form-group">
{{ csrf_field() }}
<label for="nombre ">{{'Nombre de producto'}}</label>
<input class="form-control" type="text" name="nombre" id="nombre" value="">
<<<<<<< HEAD
<!--<br>
<label for="categoria"></label>
<input class="form-control" type="text" name="categoria" id="categoria" value="">-->
=======
<br>
<label for="categoria">{{'Categoria'}}</label>
<input class="form-control" type="text" name="categoria" id="categoria" value="">
>>>>>>> b09839e1e7ca006d6fd9bfde84619120080a64ce
<br>
<label for="cantidad ">{{'Cantidad'}}</label>
<input class="form-control" type="text" name="cantidad" id="cantidad" value="">
<br>
<label for="unidad_de_medida ">{{'Unidad de medida'}}</label>
<input class="form-control" type="text" name="unidad_de_medida" id="unidad_de_medida" value="">
<br>
<input type="submit" value="agregar" class="btn btn-success">


    </div>
</form>
    </div>
</div>

@endsection
