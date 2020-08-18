@extends('layouts.dashboard')
@section('seccion')
    Pacientes
@endsection


@section('contenido')
<div id="contenedor" class="row">

        <div style="height: 650px">
            <div class="h-100 d-inline-block" style="width: 650px">
                <canvas id="myChart" width="200" height="200"></canvas>
            </div>
        </div>

        <div style="height: 620px col-md-offset-4 float-right">
            <div class="h-100 d-inline-block col-md-offset-4 float-right" style="width: 620px ">
                <canvas id="myDonut" width="200" height="200"></canvas>
            </div>
        </div>

        <div style="height: 900px f.ml-auto">
            <canvas id="densityChart" width="800" height="600"></canvas>
        </div>
</div>
@endsection




