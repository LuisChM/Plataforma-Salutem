        <div class="form-group">
            <label for="logrosPlan">Logros del plan nutricional
            </label>
            <input type="text" class="form-control " name="logrosPlan" id="logrosPlan" placeholder="Ingrese logrosPlan"
                value="{{ old('logrosPlan', $hojaSeguimiento->logrosPlan) }}">
        </div>
        <div class="form-group">
            <label for="deficientes">Áreas deficientes</label>
            <textarea class="form-control" name="deficientes" id="deficientes" rows="3"
                placeholder="Ingrese las deficientes">{{ old('deficientes', $hojaSeguimiento->deficientes) }}</textarea>
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
                    <td><input type="text" class="form-control " name="pesoInicial" id="pesoInicial"
                            placeholder="Ingrese pesoInicial" value="{{ old('pesoInicial', $hojaSeguimiento->pesoInicial) }}">
                    </td>
                </tr>
                <tr>
                    <td>IMC</td>
                    <td><input type="text" class="form-control " name="imcInicial" id="imcInicial"
                            placeholder="Ingrese imcInicial" value="{{ old('imcInicial', $hojaSeguimiento->imcInicial) }}">
                    </td>
                </tr>
                <tr>
                    <td>% grasa</td>
                    <td><input type="text" class="form-control " name="grasaInicial" id="grasaInicial"
                            placeholder="Ingrese grasaInicial"
                            value="{{ old('grasaInicial', $hojaSeguimiento->grasaInicial) }}"></td>
                </tr>
                <tr>
                    <td>Circunferencia abdominal</td>
                    <td><input type="text" class="form-control " name="circAbdominalInicial" id="circAbdominalInicial"
                            placeholder="Ingrese circAbdominalInicial"
                            value="{{ old('circAbdominalInicial', $hojaSeguimiento->circAbdominalInicial) }}"></td>
                </tr>
                <tr>
                    <td>Requerimiento</td>
                    <td><input type="text" class="form-control " name="requerimientoInicial" id="requerimientoInicial"
                            placeholder="Ingrese requerimientoInicial"
                            value="{{ old('requerimientoInicial', $hojaSeguimiento->requerimientoInicial) }}"></td>
                </tr>
                <tr>
                    <td>Distribución de macros</td>
                </tr>
                <tr>
                    <td>CHO</td>
                    <td><input type="text" class="form-control " name="distChoInicial" id="distChoInicial"
                            placeholder="Ingrese distChoInicial"
                            value="{{ old('distChoInicial', $hojaSeguimiento->distChoInicial) }}"></td>
                </tr>
                <tr>
                    <td>CHON</td>
                    <td><input type="text" class="form-control " name="distChonInicial" id="distChonInicial"
                            placeholder="Ingrese distChonInicial"
                            value="{{ old('distChonInicial', $hojaSeguimiento->distChonInicial) }}"></td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td><input type="text" class="form-control " name="distGrasasInicial" id="distGrasasInicial"
                            placeholder="Ingrese distGrasasInicial"
                            value="{{ old('distGrasasInicial', $hojaSeguimiento->distGrasasInicial) }}"></td>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <label for="cambioPlan">Cambios en plan de alimentación</label>
            <textarea class="form-control" name="cambioPlan" id="cambioPlan" rows="3"
                placeholder="Ingrese las cambioPlan">{{ old('cambioPlan', $hojaSeguimiento->cambioPlan) }}</textarea>
        </div>
        <div class="form-group">
            <label for="metasObjetivos">Metas y objetivos nuevos</label>
            <textarea class="form-control" name="metasObjetivos" id="metasObjetivos" rows="3"
                placeholder="Ingrese las metasObjetivos">{{ old('metasObjetivos', $hojaSeguimiento->metasObjetivos) }}</textarea>
        </div>
   

<div class="d-flex justify-content-end mt-5 mb-5">
    {{-- <a class="btn btn-primary mr-3" href="{{ route('pacientes.create') }}" role="button">Volver</a> --}}
    <button class="btn btn-secondary text-white">{{ $btnText ?? '' }}</button>
</div>