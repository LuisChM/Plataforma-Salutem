@extends('layouts.perfilUsuario')
@section('contenido')
    <div class="container mt-5">
        <div class="form-group">
            <label for="logrosPlan">Logros del plan nutricional
            </label>
            <input type="text" class="form-control " name="logrosPlan" id="logrosPlan" disabled placeholder="Ingrese logrosPlan"
                value="{{ $cliente->logrosPlan }}">
        </div>


        <div class="form-group">
            <label for="deficientes">Áreas deficientes</label>
            <textarea class="form-control" name="deficientes" id="deficientes" rows="3"
                disabled placeholder="Ingrese las deficientes">{{$cliente->deficientes }}</textarea>
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
                            disabled placeholder="Ingrese pesoInicial" value="{{ $cliente->pesoInicial }}"></td>
                    <td><input type="text" class="form-control " name="pesoSeguimiento" id="pesoSeguimiento"
                            disabled placeholder="Ingrese pesoSeguimiento" value="{{ $cliente->pesoSeguimiento }}"></td>
                </tr>
                <tr>
                    <td>IMC</td>
                    <td><input type="text" class="form-control " name="imcInicial" id="imcInicial"
                            disabled placeholder="Ingrese imcInicial" value="{{  $cliente->imcInicial }}"></td>
                    <td><input type="text" class="form-control " name="imcSeguimiento" id="imcSeguimiento"
                            disabled placeholder="Ingrese imcSeguimiento" value="{{$cliente->imcSeguimiento }}"></td>
                </tr>
                <tr>
                    <td>% grasa</td>
                    <td><input type="text" class="form-control " name="grasaInicial" id="grasaInicial"
                            disabled placeholder="Ingrese grasaInicial" value="{{$cliente->grasaInicial }}"></td>
                    <td><input type="text" class="form-control " name="grasaSeguimiento" id="grasaSeguimiento"
                            disabled placeholder="Ingrese grasaSeguimiento" value="{{ $cliente->grasaSeguimiento }}"></td>
                </tr>
                <tr>
                    <td>Circunferencia abdominal</td>
                    <td><input type="text" class="form-control " name="circAbdominalInicial" id="circAbdominalInicial"
                            disabled placeholder="Ingrese circAbdominalInicial" value="{{  $cliente->circAbdominalInicial }}"></td>
                    <td><input type="text" class="form-control " name="circAbdominalSeguimiento" id="circAbdominalSeguimiento"
                            disabled placeholder="Ingrese circAbdominalSeguimiento" value="{{  $cliente->circAbdominalSeguimiento }}">
                    </td>
                </tr>
                <tr>
                    <td>Requerimiento</td>
                    <td><input type="text" class="form-control " name="requerimientoInicial" id="requerimientoInicial"
                            disabled placeholder="Ingrese requerimientoInicial" value="{{  $cliente->requerimientoInicial }}"></td>
                    <td><input type="text" class="form-control " name="requerimientoSeguimiento" id="requerimientoSeguimiento"
                            disabled placeholder="Ingrese requerimientoSeguimiento" value="{{ $cliente->requerimientoSeguimiento }}">
                    </td>
                </tr>
                <tr>
                    <td>Distribución de macros</td>
                </tr>
                <tr>
                    <td>CHO</td>
                    <td><input type="text" class="form-control " name="distChoInicial" id="distChoInicial"
                            disabled placeholder="Ingrese distChoInicial" value="{{  $cliente->distChoInicial }}"></td>
                    <td><input type="text" class="form-control " name="distChoSeguimiento" id="distChoSeguimiento"
                            disabled placeholder="Ingrese distChoSeguimiento" value="{{  $cliente->distChoSeguimiento }}"></td>
                </tr>
                <tr>
                    <td>CHON</td>
                    <td><input type="text" class="form-control " name="distChonInicial" id="distChonInicial"
                            disabled placeholder="Ingrese distChonInicial" value="{{ $cliente->distChonInicial }}"></td>
                    <td><input type="text" class="form-control " name="distChonSeguimiento" id="distChonSeguimiento"
                            disabled placeholder="Ingrese distChonSeguimiento" value="{{ $cliente->distChonSeguimiento }}"></td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td><input type="text" class="form-control " name="distGrasasInicial" id="distGrasasInicial"
                            disabled placeholder="Ingrese distGrasasInicial" value="{{  $cliente->distGrasasInicial }}"></td>
                    <td><input type="text" class="form-control " name="distGrasasSeguimiento" id="distGrasasSeguimiento"
                            disabled placeholder="Ingrese distGrasasSeguimiento" value="{{ $cliente->distGrasasSeguimiento }}"></td>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <label for="cambioPlan">Cambios en plan de alimentación</label>
            <textarea class="form-control" name="cambioPlan" id="cambioPlan" rows="3"
                disabled placeholder="Ingrese las cambioPlan">{{ $cliente->cambioPlan }}</textarea>
        </div>
        <div class="form-group">
            <label for="metasObjetivos">Metas y objetivos nuevos</label>
            <textarea class="form-control" name="metasObjetivos" id="metasObjetivos" rows="3"
                disabled placeholder="Ingrese las metasObjetivos">{{ $cliente->metasObjetivos }}</textarea>
        </div>
    </div>

@endsection
