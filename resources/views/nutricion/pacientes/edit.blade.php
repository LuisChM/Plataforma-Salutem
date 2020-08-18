@extends('layouts.dashboard')
@section('seccion')
    paciente nutricional
@endsection

@section('contenido')
    <div class="container mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">

                    <form class="mt-4" action="{{ route('pacientes.update', $paciente) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="accordion bg-none" id="accordionStyle" style="max-width: none">

                            <div class="card bg-none border-0 mb-1">
                                <div class="card-header bg-collapse-gray" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Datos del paciente <img src="/img/anadir.svg" alt="icono" class="iconoAcordion"> </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionStyle">
                                    <div class="card-body">



                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control " name="nombre" id="nombre" placeholder="Ingrese el nombre"
                                                value="{{  $paciente->nombre }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="apellido">Apellido</label>
                                            <input type="text" class="form-control " name="apellido" id="apellido"
                                                placeholder="Ingrese el apellido" value="{{ old('apellido', $paciente->apellido) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="genero">Género</label>
                                            <select name="" id="" class="form-control">
                                                <option value="" disabled selected>Selecione el género</option>
                                                <option value="m">Masculino</option>
                                                <option value="f">Femenino</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="edad">Edad</label>
                                            <input type="number" class="form-control mb-3" name="edad" id="edad" placeholder="Ingrese el edad"
                                                value="{{ old('edad', $paciente->edad) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="correo">Correo electrónico</label>
                                            <input type="email" class="form-control mb-3" name="correo" id="correo"
                                                placeholder="Ingrese el correo" value="{{ old('correo', $paciente->correo) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="telefono">Número de teléfono</label>
                                            <input type="number" class="form-control mb-3" name="telefono" id="telefono"
                                                placeholder="Digite el número de teléfono" value="{{ old('telefono', $paciente->telefono) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="estadoCivil">Estado civil</label>
                                            <input type="text" class="form-control mb-3" name="estadoCivil" id="estadoCivil"
                                                placeholder="Ingrese el estado civil" value="{{ old('estadoCivil', $paciente->estadoCivil) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="trabajo">Trabajo que desempeña</label>
                                            <input type="text" class="form-control mb-3" name="trabajo" id="trabajo"
                                                placeholder="Ingrese el trabajo" value="{{ old('trabajo', $paciente->trabajo) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="religion">Religion</label>
                                            <input type="text" class="form-control mb-3" name="religion" id="religion"
                                                placeholder="Ingrese la religión" value="{{ old('religion', $paciente->religion) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="motivoConsulta">Motivo de consulta</label>
                                            <input type="text" class="form-control mb-3" name="motivoConsulta" id="motivoConsulta"
                                                placeholder="Ingrese el motivo de la consulta"
                                                value="{{ old('motivoConsulta', $paciente->motivoConsulta) }}">
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="pesoActual">Peso actual</label>
                                                <input type="text" class="form-control mb-3" name="pesoActual" id="pesoActual"
                                                    placeholder="Ingrese el peso actual" value="{{ old('pesoActual', $paciente->pesoActual) }}">
                                            </div>

                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="composCorporal">Composición corporal</label>
                                                <input type="text" class="form-control mb-3" name="composCorporal" id="composCorporal"
                                                    placeholder="Ingrese la composición corporal "
                                                    value="{{ old('composCorporal', $paciente->composCorporal) }}">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="pesoUsual">Peso usual</label>
                                                <input type="text" class="form-control mb-3" name="pesoUsual" id="pesoUsual"
                                                    placeholder="Ingrese el peso usual " value="{{ old('pesoUsual', $paciente->pesoUsual) }}">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="IMC">IMC</label>
                                                <input type="text" class="form-control mb-3" name="IMC" id="IMC" placeholder="Ingrese el IMC "
                                                    value="{{ old('IMC', $paciente->IMC) }}">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="talla">Talla</label>
                                                <input type="text" class="form-control mb-3" name="talla" id="talla"
                                                    placeholder="Ingrese la talla " value="{{ old('talla', $paciente->talla) }}">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="PI">PI</label>
                                                <input type="text" class="form-control mb-3" name="PI" id="PI" placeholder="Ingrese el PI"
                                                    value="{{ old('PI', $paciente->PI) }}">
                                            </div>

                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="cMuneca">C. Muñeca</label>
                                                <input type="text" class="form-control mb-3" name="cMuneca" id="cMuneca"
                                                    placeholder="Ingrese el C. Muñeca" value="{{ old('cMuneca', $paciente->cMuneca) }}">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="pesoMeta">Peso meta</label>
                                                <input type="text" class="form-control mb-3" name="pesoMeta" id="pesoMeta"
                                                    placeholder="Ingrese el peso meta" value="{{ old('pesoMeta', $paciente->pesoMeta) }}">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="cAbdomen">C. Abdominal</label>
                                                <input type="text" class="form-control mb-3" name="cAbdomen" id="cAbdomen"
                                                    placeholder="Ingrese el C. Abdominal" value="{{ old('cAbdomen', $paciente->cAbdomen) }}">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label for="pesoUsar">Peso a usar</label>
                                                <input type="text" class="form-control mb-3" name="pesoUsar" id="pesoUsar"
                                                    placeholder="Ingrese el peso a usar" value="{{ old('pesoUsar', $paciente->pesoUsar) }}">
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>

                        <div class="d-flex justify-content-end mt-5">
                            <div class="d-flex justify-content-end mt-5">
                                <a class="btn btn-primary mr-3" href="{{ route('pacientes.index') }}" role="button">Volver</a>
                                <button class="btn btn-secondary text-white">Gurdar</button>
                            </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
