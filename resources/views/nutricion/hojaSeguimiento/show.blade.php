@extends('layouts.dashboard')
@section('seccion')
Hoja de Seguimiento
@endsection

@section('contenido')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form method="Post" action="{{route('seguimientos.destroy',$hojaSeguimiento->id)}}">
                    @csrf
                    @method('delete')
                    <button class="bg-transparent border-0 delete-confirm" type="submit"><img src="/img/basura.svg" class="iconoAccion"
                        alt="eliminar"></button>
                </form>
                <div class="form-group">
                    <label for="logrosPlan">Logros del plan nutricional</label>
                    <input disabled type="text" class="form-control " name="logrosPlan" id="logrosPlan" placeholder="Ingrese logrosPlan"
                        value="{{$hojaSeguimiento->logrosPlan}}">
                </div>
                <div class="form-group">
                    <label for="deficientes">Áreas deficientes</label>
                    <textarea class="form-control" name="deficientes" id="deficientes" rows="3"
                        placeholder="Ingrese las deficientes">{{$hojaSeguimiento->deficientes}}</textarea>
                </div>
                <table class="table  mt-4 text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Datos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Peso</td>
                            <td><input disabled type="text" class="form-control " name="pesoInicial" id="pesoInicial" value="{{$hojaSeguimiento->pesoInicial}}">
                            </td>
                        </tr>
                        <tr>
                            <td>IMC</td>
                            <td><input disabled type="text" class="form-control " name="imcInicial" id="imcInicial" value="{{$hojaSeguimiento->imcInicial}}">
                            </td>
                        </tr>
                        <tr>
                            <td>% grasa</td>
                            <td><input disabled type="text" class="form-control " name="grasaInicial" id="grasaInicial"
                                    value="{{$hojaSeguimiento->grasaInicial}}"></td>
                        </tr>
                        <tr>
                            <td>Circunferencia abdominal</td>
                            <td><input disabled type="text" class="form-control " name="circAbdominalInicial" id="circAbdominalInicial"
                                    value="{{$hojaSeguimiento->circAbdominalInicial}}"></td>
                        </tr>
                        <tr>
                            <td>Requerimiento</td>
                            <td><input disabled type="text" class="form-control " name="requerimientoInicial" id="requerimientoInicial"
                                    value="{{$hojaSeguimiento->requerimientoInicial}}"></td>
                        </tr>
                        <tr>
                            <td>Distribución de macros</td>
                        </tr>
                        <tr>
                            <td>CHO</td>
                            <td><input disabled type="text" class="form-control " name="distChoInicial" id="distChoInicial"
                                    value="{{$hojaSeguimiento->distChoInicial}}"></td>
                        </tr>
                        <tr>
                            <td>CHON</td>
                            <td><input disabled type="text" class="form-control " name="distChonInicial" id="distChonInicial"
                                    value="{{$hojaSeguimiento->distChonInicial}}"></td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td><input disabled type="text" class="form-control " name="distGrasasInicial" id="distGrasasInicial"
                                    value="{{$hojaSeguimiento->distGrasasInicial}}"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <label for="cambioPlan">Cambios en plan de alimentación</label>
                    <textarea class="form-control" name="cambioPlan" id="cambioPlan" rows="3">{{$hojaSeguimiento->cambioPlan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="metasObjetivos">Metas y objetivos nuevos</label>
                    <textarea class="form-control" name="metasObjetivos" id="metasObjetivos" rows="3">{{$hojaSeguimiento->metasObjetivos}}</textarea>
                </div>
           
        
        <div class="d-flex justify-content-end mt-5 mb-5">
            {{-- <a class="btn btn-primary mr-3" href="{{route('pacientes.edit', $paciente->id)}}" role="button">Volver</a> --}}
            
        </div>        
            </div>
        </div>
    </div>
</div>

@endsection