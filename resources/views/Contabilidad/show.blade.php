@extends('layouts.dashboard')
@section('seccion')
Administracion contable
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="form-group">
        <label for="ingresos">Ingresos:</label>
        <input disabled type="number" class="form-control" name="ingresos" id="ingresos" placeholder="Ingresos del día"
            value="{{ $contabilidad->ingresos }}">
    </div>
    <div class="form-group">
        <label for="gastos">Gastos:</label>
        <input disabled type="number" class="form-control" name="gastos" id="gastos" placeholder="gastos del día"
            value="{{  $contabilidad->gastos}}">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea disabled  class="form-control" name="descripcion" id="descripcion" rows="3"
            placeholder="Ingrese una descripción (opcional)">{{ $contabilidad->descripcion }}</textarea>
    </div>
    <div class="form-group ">
        <label for="fecha">Fecha:</label>
        <div class="d-flex align-items-center ">
            <input disabled type="date"
            class="form-control col-lg-4 col-lg-4 col-md-4 "
                name="fecha" id="fecha" value="{{$contabilidad->fecha }}">
           
        </div>
    </div>
    <div class="form-group ">
        <label for="total">Total:</label>
        <div class="d-flex align-items-center ">
        <input disabled type="number" class="form-control col-lg-4 col-md-4 "
                name="total" id="total" value="{{ $contabilidad->total}}" data-decimals="2" min="0" step="0.01">
           
        </div>
    </div>
</div>
@endsection