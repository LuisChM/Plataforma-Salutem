@extends('layouts.dashboard')
@section('seccion')
Pacientes
@endsection

@section('contenido')
<div class="form-group">
    <label for="logrosPlan">Logros del plan nutricional
    </label>
    <input type="text" class="form-control " name="logrosPlan" id="logrosPlan" placeholder="Ingrese logrosPlan"
        value="{{ $paciente->logrosPlan }}">
</div>
<div class="form-group">
    <label for="deficientes">Áreas deficientes</label>
    <textarea class="form-control" name="deficientes" id="deficientes" rows="3"
        placeholder="Ingrese las deficientes">{{$paciente->deficientes }}</textarea>
</div>
<table class="table  mt-4 text-center">
    <thead class="thead-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col">Inicial</th>
            <th scope="col">1er seguimiento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Peso</td>
            <td><input type="text" class="form-control " name="pesoInicial" id="pesoInicial"
                    placeholder="Ingrese pesoInicial" value="{{ $paciente->pesoInicial }}"></td>
            <td><input type="text" class="form-control " name="pesoSeguimiento" id="pesoSeguimiento"
                    placeholder="Ingrese pesoSeguimiento" value="{{ $paciente->pesoSeguimiento }}"></td>
        </tr>
        <tr>
            <td>IMC</td>
            <td><input type="text" class="form-control " name="imcInicial" id="imcInicial"
                    placeholder="Ingrese imcInicial" value="{{  $paciente->imcInicial }}"></td>
            <td><input type="text" class="form-control " name="imcSeguimiento" id="imcSeguimiento"
                    placeholder="Ingrese imcSeguimiento" value="{{$paciente->imcSeguimiento }}"></td>
        </tr>
        <tr>
            <td>% grasa</td>
            <td><input type="text" class="form-control " name="grasaInicial" id="grasaInicial"
                    placeholder="Ingrese grasaInicial" value="{{$paciente->grasaInicial }}"></td>
            <td><input type="text" class="form-control " name="grasaSeguimiento" id="grasaSeguimiento"
                    placeholder="Ingrese grasaSeguimiento" value="{{ $paciente->grasaSeguimiento }}"></td>
        </tr>
        <tr>
            <td>Circunferencia abdominal</td>
            <td><input type="text" class="form-control " name="circAbdominalInicial" id="circAbdominalInicial"
                    placeholder="Ingrese circAbdominalInicial" value="{{  $paciente->circAbdominalInicial }}"></td>
            <td><input type="text" class="form-control " name="circAbdominalSeguimiento" id="circAbdominalSeguimiento"
                    placeholder="Ingrese circAbdominalSeguimiento" value="{{  $paciente->circAbdominalSeguimiento }}">
            </td>
        </tr>
        <tr>
            <td>Requerimiento</td>
            <td><input type="text" class="form-control " name="requerimientoInicial" id="requerimientoInicial"
                    placeholder="Ingrese requerimientoInicial" value="{{  $paciente->requerimientoInicial }}"></td>
            <td><input type="text" class="form-control " name="requerimientoSeguimiento" id="requerimientoSeguimiento"
                    placeholder="Ingrese requerimientoSeguimiento" value="{{ $paciente->requerimientoSeguimiento }}">
            </td>
        </tr>
        <tr>
            <td>Distribución de macros</td>
        </tr>
        <tr>
            <td>CHO</td>
            <td><input type="text" class="form-control " name="distChoInicial" id="distChoInicial"
                    placeholder="Ingrese distChoInicial" value="{{  $paciente->distChoInicial }}"></td>
            <td><input type="text" class="form-control " name="distChoSeguimiento" id="distChoSeguimiento"
                    placeholder="Ingrese distChoSeguimiento" value="{{  $paciente->distChoSeguimiento }}"></td>
        </tr>
        <tr>
            <td>CHON</td>
            <td><input type="text" class="form-control " name="distChonInicial" id="distChonInicial"
                    placeholder="Ingrese distChonInicial" value="{{ $paciente->distChonInicial }}"></td>
            <td><input type="text" class="form-control " name="distChonSeguimiento" id="distChonSeguimiento"
                    placeholder="Ingrese distChonSeguimiento" value="{{ $paciente->distChonSeguimiento }}"></td>
        </tr>
        <tr>
            <td>Grasas</td>
            <td><input type="text" class="form-control " name="distGrasasInicial" id="distGrasasInicial"
                    placeholder="Ingrese distGrasasInicial" value="{{  $paciente->distGrasasInicial }}"></td>
            <td><input type="text" class="form-control " name="distGrasasSeguimiento" id="distGrasasSeguimiento"
                    placeholder="Ingrese distGrasasSeguimiento" value="{{ $paciente->distGrasasSeguimiento }}"></td>
        </tr>
    </tbody>
</table>
<div class="form-group">
    <label for="cambioPlan">Cambios en plan de alimentación</label>
    <textarea class="form-control" name="cambioPlan" id="cambioPlan" rows="3"
        placeholder="Ingrese las cambioPlan">{{ $paciente->cambioPlan }}</textarea>
</div>
<div class="form-group">
    <label for="metasObjetivos">Metas y objetivos nuevos</label>
    <textarea class="form-control" name="metasObjetivos" id="metasObjetivos" rows="3"
        placeholder="Ingrese las metasObjetivos">{{ $paciente->metasObjetivos }}</textarea>
</div>
@endsection