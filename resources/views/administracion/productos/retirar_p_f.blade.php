@extends('layouts.dashboard')
@section('seccion')
Retirar producto
@endsection

@section('contenido')

<a href="{{route('retirar_producto.index')}}" class="btn btn-warning" >Regresar</a>

<div class="row justify-content-center " >
    <div class="col-sm-8 align-self-center text-center">

<form action="{{url('retirar_producto/'.$producto->id)}}" method="post"  style="margin:0 auto">
{{ csrf_field() }}
{{method_field('PUT')}}

<label for="nombre ">{{'Nombre de producto'}}</label>
<input class="form-control" type="text" disabled="disabled" name="nombre" id="nombre" value="{{$producto->nombre}}">
<br>
<label for="nuevaCantidad">{{'Cantidad que desea retirar'}}</label>
<input class="form-control" type="number" name="nuevaCantidad" id="nuevaCantidad" value="">
<br>
 <input type="submit" value="Retirar" class="btn btn-success" onclick="return confirm('Desea retirar?')">

</form>

</div>
</div>


@endsection

