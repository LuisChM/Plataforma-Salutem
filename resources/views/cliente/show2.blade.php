@extends('layouts.perfilUsuario')
@section('contenido')
    <div class="container mt-5">
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
                            <label class="font-weight-bold" for="desLunes">Desayuno</label>
                            <p>{{ $cliente->desLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desMartes">Desayuno</label>
                            <p>{{ $cliente->desMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desMiercoles">Desayuno</label>
                            <p>{{ $cliente->desMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desJueves">Desayuno</label>
                            <p>{{ $cliente->desJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desViernes">Desayuno</label>
                            <p>{{ $cliente->desViernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desSabado">Desayuno</label>
                            <p>{{ $cliente->desSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="desDomingo">Desayuno</label>
                            <p>{{ $cliente->desDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Desayuno --}}

                    {{-- Merienda matutina --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatLunes">Merienda matutina</label>
                            <p>{{ $cliente->mMatLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatMartes">Merienda matutina</label>
                            <p>{{ $cliente->mMatMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatMiercoles">Merienda matutina</label>
                            <p>{{ $cliente->mMatMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatJueves">Merienda matutina</label>
                            <p>{{ $cliente->mMatJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatviernes">Merienda matutina</label>
                            <p>{{ $cliente->mMatviernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatSabado">Merienda matutina</label>
                            <p>{{ $cliente->mMatSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMatDomingo">Merienda matutina</label>
                            <p>{{ $cliente->mMatDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Merienda matutina --}}

                    {{-- Almuerzo --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almLunes">Almuerzo</label>
                            <p>{{ $cliente->almLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almMartes">Almuerzo</label>
                            <p>{{ $cliente->almMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almMiercoles">Almuerzo</label>
                            <p>{{ $cliente->almMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almJueves">Almuerzo</label>
                            <p>{{ $cliente->almJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almViernes">Almuerzo</label>
                            <p>{{ $cliente->almViernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almSabado">Almuerzo</label>
                            <p>{{ $cliente->almSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="almDomingo">Almuerzo</label>
                            <p>{{ $cliente->almDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Almuerzo --}}

                    {{-- Merienda tarde --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerLunes">Merienda tarde</label>
                            <p>{{ $cliente->mMerLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerMartes">Merienda tarde</label>
                            <p>{{ $cliente->mMerMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerMiercoles">Merienda tarde</label>
                            <p>{{ $cliente->mMerMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerJueves">Merienda tarde</label>
                            <p>{{ $cliente->mMerJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerviernes">Merienda tarde</label>
                            <p>{{ $cliente->mMerviernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerSabado">Merienda tarde</label>
                            <p>{{ $cliente->mMerSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="mMerDomingo">Merienda tarde</label>
                            <p>{{ $cliente->mMerDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Merienda tarde --}}

                    {{-- Cena --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenLunes">Cena</label>
                            <p>{{ $cliente->cenLunes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenMartes">Cena</label>
                            <p>{{ $cliente->cenMartes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenMiercoles">Cena</label>
                            <p>{{ $cliente->cenMiercoles }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenJueves">Cena</label>
                            <p>{{ $cliente->cenJueves }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenViernes">Cena</label>
                            <p>{{ $cliente->cenViernes }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenSabado">Cena</label>
                            <p>{{ $cliente->cenSabado }}</p>
                        </td>
                        <td class="border-right border-top-0 ">
                            <label class="font-weight-bold" for="cenDomingo">Cena</label>
                            <p>{{ $cliente->cenDomingo }}</p>
                        </td>
                    </tr>
                    {{-- /Cena --}}



                </tbody>

            </table>
        </div>
    </div>

@endsection
