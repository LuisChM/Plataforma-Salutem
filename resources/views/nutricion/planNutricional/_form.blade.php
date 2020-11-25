        <div class="responsive-table">
            <table class="table mt-4 text-center">
                <thead class="thead-green">
                    <tr>
                        <th scope="col">Lunes</th>
                        <th scope="col">Martes</th>
                        <th scope="col">Miércoles</th>
                        <th scope="col">Jueves</th>
                        <th scope="col">Viernes</th>
                        <th scope="col">Sabádo</th>
                        <th scope="col">Domingo</th>

                    </tr>
                </thead>
                <tbody class="bg-white text-left ">
                    {{-- Desayuno --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label for="desLunes">Desayuno</label>
                            <textarea name="desLunes" id="desLunes" cols="20" rows="10">{{ old('desLunes', $planNutricional->desLunes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="desMartes">Desayuno</label>
                            <textarea name="desMartes" id="desMartes" cols="20" rows="10">{{ old('desMartes', $planNutricional->desMartes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="desMiercoles">Desayuno</label>
                            <textarea name="desMiercoles" id="desMiercoles" cols="20" rows="10">{{ old('desMiercoles', $planNutricional->desMiercoles) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="desJueves">Desayuno</label>
                            <textarea name="desJueves" id="desJueves" cols="20" rows="10">{{ old('desJueves', $planNutricional->desJueves) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="desViernes">Desayuno</label>
                            <textarea name="desViernes" id="desViernes" cols="20" rows="10">{{ old('desViernes', $planNutricional->desViernes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="desSabado">Desayuno</label>
                            <textarea name="desSabado" id="desSabado" cols="20" rows="10">{{ old('desSabado', $planNutricional->desSabado) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="desDomingo">Desayuno</label>
                            <textarea name="desDomingo" id="desDomingo" cols="20" rows="10">{{ old('desDomingo', $planNutricional->desDomingo) }}</textarea>
                        </td>
                    </tr>
                    {{-- /Desayuno --}}

                     {{-- Merienda matutina --}}
                     <tr>
                        <td class="border-right border-top-0 ">
                            <label for="mMatLunes">Merienda matutina</label>
                            <textarea name="mMatLunes" id="mMatLunes" cols="20" rows="10">{{ old('mMatLunes', $planNutricional->mMatLunes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMatMartes">Merienda matutina</label>
                            <textarea name="mMatMartes" id="mMatMartes" cols="20" rows="10">{{ old('mMatMartes', $planNutricional->mMatMartes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMatMiercoles">Merienda matutina</label>
                            <textarea name="mMatMiercoles" id="mMatMiercoles" cols="20" rows="10">{{ old('mMatMiercoles', $planNutricional->mMatMiercoles) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMatJueves">Merienda matutina</label>
                            <textarea name="mMatJueves" id="mMatJueves" cols="20" rows="10">{{ old('mMatJueves', $planNutricional->mMatJueves) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMatviernes">Merienda matutina</label>
                            <textarea name="mMatviernes" id="mMatviernes" cols="20" rows="10">{{ old('mMatviernes', $planNutricional->mMatviernes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMatSabado">Merienda matutina</label>
                            <textarea name="mMatSabado" id="mMatSabado" cols="20" rows="10">{{ old('mMatSabado', $planNutricional->mMatSabado) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMatDomingo">Merienda matutina</label>
                            <textarea name="mMatDomingo" id="mMatDomingo" cols="20" rows="10">{{ old('mMatDomingo', $planNutricional->mMatDomingo) }}</textarea>
                        </td>
                    </tr>
                    {{-- /Merienda matutina --}}

                    {{-- Almuerzo --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label for="almLunes">Almuerzo</label>
                            <textarea name="almLunes" id="almLunes" cols="20" rows="10">{{ old('almLunes', $planNutricional->almLunes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="almMartes">Almuerzo</label>
                            <textarea name="almMartes" id="almMartes" cols="20" rows="10">{{ old('almMartes', $planNutricional->almMartes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="almMiercoles">Almuerzo</label>
                            <textarea name="almMiercoles" id="almMiercoles" cols="20" rows="10">{{ old('almMiercoles', $planNutricional->almMiercoles) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="almJueves">Almuerzo</label>
                            <textarea name="almJueves" id="almJueves" cols="20" rows="10">{{ old('almJueves', $planNutricional->almJueves) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="almViernes">Almuerzo</label>
                            <textarea name="almViernes" id="almViernes" cols="20" rows="10">{{ old('almViernes', $planNutricional->almViernes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="almSabado">Almuerzo</label>
                            <textarea name="almSabado" id="almSabado" cols="20" rows="10">{{ old('almSabado', $planNutricional->almSabado) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="almDomingo">Almuerzo</label>
                            <textarea name="almDomingo" id="almDomingo" cols="20" rows="10">{{ old('almDomingo', $planNutricional->almDomingo) }}</textarea>
                        </td>
                    </tr>
                    {{-- /Almuerzo --}}

                    {{-- Merienda tarde --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label for="mMerLunes">Merienda tarde</label>
                            <textarea name="mMerLunes" id="mMerLunes" cols="20" rows="10">{{ old('mMerLunes', $planNutricional->mMerLunes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMerMartes">Merienda tarde</label>
                            <textarea name="mMerMartes" id="mMerMartes" cols="20" rows="10">{{ old('mMerMartes', $planNutricional->mMerMartes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMerMiercoles">Merienda tarde</label>
                            <textarea name="mMerMiercoles" id="mMerMiercoles" cols="20" rows="10">{{ old('mMerMiercoles', $planNutricional->mMerMiercoles) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMerJueves">Merienda tarde</label>
                            <textarea name="mMerJueves" id="mMerJueves" cols="20" rows="10">{{ old('mMerJueves', $planNutricional->mMerJueves) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMerviernes">Merienda tarde</label>
                            <textarea name="mMerviernes" id="mMerviernes" cols="20" rows="10">{{ old('mMerviernes', $planNutricional->mMerviernes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMerSabado">Merienda tarde</label>
                            <textarea name="mMerSabado" id="mMerSabado" cols="20" rows="10">{{ old('mMerSabado', $planNutricional->mMerSabado) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="mMerDomingo">Merienda tarde</label>
                            <textarea name="mMerDomingo" id="mMerDomingo" cols="20" rows="10">{{ old('mMerDomingo', $planNutricional->mMerDomingo) }}</textarea>
                        </td>
                    </tr>
                    {{-- /Merienda tarde --}}

                    {{-- Cena --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label for="cenLunes">Cena</label>
                            <textarea name="cenLunes" id="cenLunes" cols="20" rows="10">{{ old('cenLunes', $planNutricional->cenLunes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="cenMartes">Cena</label>
                            <textarea name="cenMartes" id="cenMartes" cols="20" rows="10">{{ old('cenMartes', $planNutricional->cenMartes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="cenMiercoles">Cena</label>
                            <textarea name="cenMiercoles" id="cenMiercoles" cols="20" rows="10">{{ old('cenMiercoles', $planNutricional->cenMiercoles) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="cenJueves">Cena</label>
                            <textarea name="cenJueves" id="cenJueves" cols="20" rows="10">{{ old('cenJueves', $planNutricional->cenJueves) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="cenViernes">Cena</label>
                            <textarea name="cenViernes" id="cenViernes" cols="20" rows="10">{{ old('cenViernes', $planNutricional->cenViernes) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="cenSabado">Cena</label>
                            <textarea name="cenSabado" id="cenSabado" cols="20" rows="10">{{ old('cenSabado', $planNutricional->cenSabado) }}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label for="cenDomingo">Cena</label>
                            <textarea name="cenDomingo" id="cenDomingo" cols="20" rows="10">{{ old('cenDomingo', $planNutricional->cenDomingo) }}</textarea>
                        </td>
                    </tr>
                    {{-- /Cena --}}

                   

                </tbody>

            </table>


        </div>
        <div class="d-flex justify-content-end mt-5 mb-5">
            <a class="btn btn-primary mr-3" href="{{ route('planNutricionals.index') }}" role="button">Volver</a>
            <button class="btn btn-secondary text-white">{{ $btnText ?? '' }}</button>
        </div>
