<div class="col-sm-12 col-md-6 col-lg-6">
    <label for="pesoActual">Peso Actual</label>
    <input type="text" class="form-control mb-3" name="pesoActual" id="pesoActual"
        placeholder="Ingrese Peso Actual" 
        value="{{ old('pesoUsual', $planNutricional->pesoActual) }}"
        >
</div>
<div class="col-sm-12 col-md-6 col-lg-6">
    <label for="porcentajeGrasa">% de grasa</label>
    <input type="text" class="form-control mb-3" name="porcentajeGrasa" id="porcentajeGrasa"
        placeholder="Ingrese % de grasa" 
        value="{{ old('pesoUsual', $planNutricional->porcentajeGrasa) }}"
        >
</div>
<div class="col-sm-12 col-md-6 col-lg-6">
    <label for="kgGrasa">Kg de grasa</label>
    <input type="text" class="form-control mb-3" name="kgGrasa" id="kgGrasa"
        placeholder="Ingrese Kg de grasa" 
        value="{{ old('pesoUsual', $planNutricional->kgGrasa) }}"
        >
</div>
<div class="col-sm-12 col-md-6 col-lg-6">
    <label for="kgMasaMuscular">Kg de masa muscular</label>
    <input type="text" class="form-control mb-3" name="kgMasaMuscular" id="kgMasaMuscular"
        placeholder="Ingrese Kg de masa muscular" 
        value="{{ old('pesoUsual', $planNutricional->kgMasaMuscular) }}"
        >
</div>

<div class="responsive-table">
    <table class="table mt-4 text-center">
        <thead class="thead-green">
            <tr>
                <th scope="col"></th>
                <th scope="col">Intercambio</th>
                <th scope="col">Ejemplos</th>

            </tr>
        </thead>
        <tbody class="bg-white text-left ">
            {{-- Desayuno --}}
            <tr>
                <td class="border-right border-top-0 ">
                    <label>Desayuno</label>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="desIntercambio" id="desIntercambio" cols="30" rows="5">{{ old('desIntercambio', $planNutricional->desIntercambio) }}</textarea>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="desEjemplo" id="desEjemplo" cols="30" rows="5">{{ old('desEjemplo', $planNutricional->desEjemplo) }}</textarea>
                </td>
            </tr>
            {{-- /Desayuno --}}
           
            {{-- MM --}}
            <tr>
                <td class="border-right border-top-0 ">
                    <label>MM</label>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="mmIntercambio" id="mmMartes" cols="30" rows="5">{{ old('mmMartes', $planNutricional->desMartes) }}</textarea>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="mmEjemplo" id="desMartes" cols="30" rows="5">{{ old('desMartes', $planNutricional->desMartes) }}</textarea>
                </td>
            </tr>
            {{-- /MM --}}
           
            {{-- Almuerzo --}}
            <tr>
                <td class="border-right border-top-0 ">
                    <label>Almuerzo</label>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="almIntercambio" id="almMartes" cols="30" rows="5">{{ old('almMartes', $planNutricional->almMartes) }}</textarea>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="almEjemplo" id="almMartes" cols="30" rows="5">{{ old('almMartes', $planNutricional->almMartes) }}</textarea>
                </td>
            </tr>
            {{-- /Almuerzo --}}
           
            {{-- MT --}}
            <tr>
                <td class="border-right border-top-0 ">
                    <label>MT</label>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="mtIntercambio" id="mtMartes" cols="30" rows="5">{{ old('mtMartes', $planNutricional->mtMartes) }}</textarea>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="mtEjemplo" id="mtMartes" cols="30" rows="5">{{ old('mtMartes', $planNutricional->mtMartes) }}</textarea>
                </td>
            </tr>
            {{-- /MT --}}
           
            {{-- Post ejercicio --}}
            <tr>
                <td class="border-right border-top-0 ">
                    <label>Post ejercicio</label>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="postEjercicioIntercambio" id="postEjercicioMartes" cols="30" rows="5">{{ old('postEjercicioMartes', $planNutricional->postEjercicioMartes) }}</textarea>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="postEjercicioEjemplo" id="postEjercicioMartes" cols="30" rows="5">{{ old('postEjercicioMartes', $planNutricional->postEjercicioMartes) }}</textarea>
                </td>
            </tr>
            {{-- /Post ejercicio --}}
           
            {{-- Cena --}}
            <tr>
                <td class="border-right border-top-0 ">
                    <label>Cena</label>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="cenaIntercambio" id="cenaMartes" cols="30" rows="5">{{ old('cenaMartes', $planNutricional->cenaMartes) }}</textarea>
                </td>
                <td class="border-right border-top-0 ">
                    <textarea name="cenaEjemplo" id="cenaMartes" cols="30" rows="5">{{ old('cenaMartes', $planNutricional->cenaMartes) }}</textarea>
                </td>
            </tr>
            {{-- /Cena --}}
           
            
        </tbody>

    </table>


</div>

<div class="col-sm-12 col-md-6 col-lg-6 mt-4">
    <label>Recomendaciones</label>
    <textarea name="recomendacion" id="recomendacion" cols="40" rows="10">{{ old('recomendacion', $planNutricional->recomendacion) }}</textarea>

</div>
        <div class="d-flex justify-content-end mt-5 mb-5">
            <a class="btn btn-primary mr-3" href="{{ route('planNutricionals.index') }}" role="button">Volver</a>
            <button class="btn btn-secondary text-white">{{ $btnText ?? '' }}</button>
        </div>
