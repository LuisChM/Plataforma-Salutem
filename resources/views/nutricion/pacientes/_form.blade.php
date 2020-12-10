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
                        value="{{ old('nombre', $paciente->nombre) }}">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control " name="apellido" id="apellido"
                        placeholder="Ingrese el apellido" value="{{ old('apellido', $paciente->apellido) }}">
                </div>
                <div class="form-group ">
                    <label for="genero">Género</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="inlineRadio1" value="hombre" {{ ($paciente->genero=="hombre")? "checked" : "" }}>
                        <label class="form-check-label" for="inlineRadio1">Hombre</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="inlineRadio2" value="mujer" {{ ($paciente->genero=="mujer")? "checked" : "" }} >
                        <label class="form-check-label" for="inlineRadio2">Mujer</label>
                      </div>
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
    <div class="card bg-none border-0 mb-1">
        <div class="card-header bg-collapse-gray" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Bioquimica <img src="/img/anadir.svg" alt="icono" class="iconoAcordion"> </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionStyle">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="colesterol">Colesterol</label>
                        <input type="text" class="form-control mb-3" name="colesterol" id="colesterol"
                            placeholder="Ingrese el colesterol" value="{{ old('colesterol', $paciente->colesterol) }}">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="HDL">HDL</label>
                        <input type="text" class="form-control mb-3" name="HDL" id="HDL" placeholder="Ingrese el HDL"
                            value="{{ old('HDL', $paciente->HDL) }}">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="LDL">LDL</label>
                        <input type="text" class="form-control mb-3" name="LDL" id="LDL" placeholder="Ingrese el LDL"
                            value="{{ old('LDL', $paciente->LDL) }}">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="triglicerios">Triglicerios:</label>
                        <input type="text" class="form-control mb-3" name="triglicerios" id="triglicerios"
                            placeholder="Ingrese el triglicerio "
                            value="{{ old('triglicerios', $paciente->triglicerios) }}">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="hemoglobina">Hemoglobina:</label>
                        <input type="text" class="form-control mb-3" name="hemoglobina" id="hemoglobina"
                            placeholder="Ingrese la hemoglobina"
                            value="{{ old('hemoglobina', $paciente->hemoglobina) }}">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="hematocrito">Hematocrito</label>
                        <input type="text" class="form-control mb-3" name="hematocrito" id="hematocrito"
                            placeholder="Ingrese el hematocrito"
                            value="{{ old('hematocrito', $paciente->hematocrito) }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="otros">Otros</label>
                    <textarea class="form-control" name="otros" id="otros" rows="3"
                        placeholder="Otros">{{ old('otros', $paciente->otros) }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-none border-0 mb-1">
        <div class="card-header bg-collapse-gray" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button"
                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                    aria-controls="collapseThree">
                    Clinica <img src="/img/anadir.svg" alt="icono" class="iconoAcordion"> </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionStyle">
            <div class="card-body">
                <div class="form-group">
                    <label for="APPOperaciones">APP/operaciones</label>
                    <input type="text" class="form-control " name="APPOperaciones" id="APPOperaciones"
                        placeholder="Ingrese el APP Operaciones"
                        value="{{ old('APPOperaciones', $paciente->APPOperaciones) }}">
                </div>
                <div class="form-group">
                    <label for="APF">APF</label>
                    <input type="text" class="form-control " name="APF" id="APF" placeholder="Ingrese el APF"
                        value="{{ old('APF', $paciente->APF) }}">
                </div>
                <div class="form-group">
                    <label for="medicamentos">Medicamentos</label>
                    <input type="text" class="form-control " name="medicamentos" id="medicamentos"
                        placeholder="Ingrese medicamentos" value="{{ old('medicamentos', $paciente->medicamentos) }}">
                </div>
                <div class="form-group">
                    <label for="alergias">Alergias alimentarias</label>
                    <input type="text" class="form-control " name="alergias" id="alergias"
                        placeholder="Ingrese alergias" value="{{ old('alergias', $paciente->alergias) }}">
                </div>
                <div class="form-group">
                    <label for="actividaFisica">Activida física</label>
                    <input type="text" class="form-control " name="actividaFisica" id="actividaFisica"
                        placeholder="Ingrese la actividaFisica"
                        value="{{ old('actividaFisica', $paciente->actividaFisica) }}">
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control " name="tipo" id="tipo" placeholder="Ingrese el tipo"
                        value="{{ old('tipo', $paciente->tipo) }}">
                </div>
                <div class="form-group">
                    <label for="frecuencia">¿Frecuencia?</label>
                    <input type="text" class="form-control " name="frecuencia" id="frecuencia"
                        placeholder="Ingrese la frecuencia" value="{{ old('frecuencia', $paciente->frecuencia) }}">
                </div>
                <div class="form-group">
                    <label for="suplementos">Suplementos</label>
                    <input type="text" class="form-control " name="suplementos" id="suplementos"
                        placeholder="Ingrese suplementos" value="{{ old('suplementos', $paciente->suplementos) }}">
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-none border-0 mb-1">
        <div class="card-header bg-collapse-gray" id="headingfour">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button"
                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
                    aria-controls="collapseFour">
                    Recordatorio de 24 horas <img src="/img/anadir.svg" alt="icono" class="iconoAcordion">
                </button>
            </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionStyle">
            <div class="card-body">
                <table class="table  mt-4 text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Hora</th>
                            <th scope="col">Alimentos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Desayuno</td>
                            <td><input type="time" name="Desayuno" id="Desayuno"
                                    value="{{ old('desayunoHora', $paciente->desayunoHora) }}"></td>
                            <td><textarea class="form-control" name="Desayuno" id="Desayuno" rows="3"
                                    placeholder="Ingrese una descripción">{{ old('desayunoAlimento', $paciente->desayunoAlimento) }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>MM</td>
                            <td><input type="time" name="MM" id="MM" value="{{ old('mmHora', $paciente->mmHora) }}">
                            </td>
                            <td><textarea class="form-control" name="MM" id="MM" rows="3"
                                    placeholder="Ingrese una descripción">{{ old('mmAlimento', $paciente->mmAlimento) }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Almuerzo</td>
                            <td><input type="time" name="Almuerzo" id="Almuerzo"
                                    value="{{ old('almuerzoHora', $paciente->almuerzoHora) }}"></td>
                            <td><textarea class="form-control" name="Almuerzo" id="Almuerzo" rows="3"
                                    placeholder="Ingrese una descripción">{{ old('almuerzoAlimento', $paciente->almuerzoAlimento) }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>MT</td>
                            <td><input type="time" name="MT" id="MT" value="{{ old('mtHora', $paciente->mtHora) }}">
                            </td>
                            <td><textarea class="form-control" name="MT" id="MT" rows="3"
                                    placeholder="Ingrese una descripción">{{ old('mtAlimento', $paciente->mtAlimento) }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Cena</td>
                            <td><input type="time" name="" id="" value="{{ old('cenaHora', $paciente->cenaHora) }}">
                            </td>
                            <td><textarea class="form-control" name="descripcion" id="descripcion" rows="3"
                                    placeholder="Ingrese una descripción">{{ old('cenaAlimento', $paciente->cenaAlimento) }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>CN</td>
                            <td><input type="time" name="CN" id="CN" value="{{ old('cnHora', $paciente->cnHora) }}">
                            </td>
                            <td><textarea class="form-control" name="CN" id="CN" rows="3"
                                    placeholder="Ingrese una descripción">{{ old('cnAlimento', $paciente->cnAlimento) }}</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control " name="total" id="total" placeholder="Ingrese total"
                        value="{{ old('total', $paciente->total) }}">
                </div>
                <div class="form-group">
                    <label for="observaciones">observaciones</label>
                    <textarea class="form-control" name="observaciones" id="observaciones" rows="3"
                        placeholder="Ingrese las observaciones">{{ old('observaciones', $paciente->observaciones) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="pregunta1">¿Ha realizado alguna dieta anteriormente?
                    </label>
                    <input type="text" class="form-control " name="pregunta1" id="pregunta1"
                        placeholder="Ingrese pregunta1" value="{{ old('pregunta1', $paciente->pregunta1) }}">
                </div>
                <div class="form-group">
                    <label for="pregunta2">Alimentos que le gustan
                    </label>
                    <input type="text" class="form-control " name="pregunta2" id="pregunta2"
                        placeholder="Ingrese pregunta2" value="{{ old('pregunta2', $paciente->pregunta2) }}">
                </div>
                <div class="form-group">
                    <label for="pregunta3">Alimentos que no le gustan
                    </label>
                    <input type="text" class="form-control " name="pregunta3" id="pregunta3"
                        placeholder="Ingrese pregunta3" value="{{ old('pregunta3', $paciente->pregunta3) }}">
                </div>
                <div class="form-group">
                    <label for="pregunta4">Tipo de cocción
                    </label>
                    <input type="text" class="form-control " name="pregunta4" id="pregunta4"
                        placeholder="Ingrese pregunta4" value="{{ old('pregunta4', $paciente->pregunta4) }}">
                </div>
                <div class="form-group">
                    <label for="pregunta5">Manera de endulzar
                    </label>
                    <input type="text" class="form-control " name="pregunta5" id="pregunta5"
                        placeholder="Ingrese pregunta5" value="{{ old('pregunta5', $paciente->pregunta5) }}">
                </div>
                <div class="form-group">
                    <label for="pregunta6">Cantidad de tiempos de comida
                    </label>
                    <input type="text" class="form-control " name="pregunta6" id="pregunta6"
                        placeholder="Ingrese pregunta6" value="{{ old('pregunta6', $paciente->pregunta6) }}">
                </div>
                <div class="form-group">
                    <label for="pregunta7">¿Dónde realiza sus tiempos de comida?
                    </label>
                    <input type="text" class="form-control " name="pregunta7" id="pregunta7"
                        placeholder="Ingrese pregunta7" value="{{ old('pregunta7', $paciente->pregunta7) }}">
                </div>
                <div class="form-group">
                    <label for="pregunta8">¿Quién prepara sus comidas?
                    </label>
                    <input type="text" class="form-control " name="pregunta8" id="pregunta8"
                        placeholder="Ingrese pregunta8" value="{{ old('pregunta8', $paciente->pregunta8) }}">
                </div>
                <div class="form-group">
                    <label for="diagnostico">Diagnóstico</label>
                    <textarea class="form-control" name="diagnostico" id="diagnostico" rows="3"
                        placeholder="Ingrese las diagnostico">{{ old('diagnostico', $paciente->diagnostico) }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-none border-0 mb-1">
        <div class="card-header bg-collapse-gray" id="headingFive">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button"
                    data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
                    aria-controls="collapseFive">
                    Hoja de seguimiento <img src="/img/anadir.svg" alt="icono" class="iconoAcordion"> </button>
            </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionStyle">
            <div class="card-body">
                @include('nutricion.hojaSeguimiento.index')
            </div>
        </div>
    </div>
</div>
    <div class="d-flex justify-content-end mt-5">
        <a class="btn btn-primary mr-3" href="{{ route('pacientes.index') }}" role="button">Volver</a>
        <button class="btn btn-secondary text-white">{{ $btnText ?? '' }}</button>
    </div>
