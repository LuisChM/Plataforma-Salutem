@extends('layouts.dashboard')
@section('seccion')
Agregar Comida
@endsection

@section('contenido')

<a href="{{route('ventas.index')}}" class="btn btn-warning">Regresar</a>
<div class="row justify-content-center " >
    <div class="col-sm-8 align-self-center text-center">

<form  action="{{url('/ventas')}}"  method="post">
<div class="form-group">
{{ csrf_field() }}
<label for="nombre_comida ">{{'Nombre de comida'}}</label>
<input class="form-control" type="text" name="nombre_comida" id="nombre_comida" value="">
<br>
<label for="descripcion">{{'Descripcion'}}</label>
<br>
<textarea class="form-control" id="descripcion" name="descripcion" rows="4" cols="50"> </textarea>

<br>
<label for="precio ">{{'Precio'}}</label>
<input  class="form-control" type="text" name="precio" id="precio" value="">
<br>
<input type="submit" value="agregar" class="btn btn-success">


    </div>
</form>

</div>
</div>
@endsection
