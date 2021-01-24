@extends('layouts.dashboard')
@section('seccion')
Plan nutricional
@endsection

@section('contenido')
<div class="container">
    <div class="container mt-5">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="pesoActual">Peso Actual</label>
            <input disabled type="text" class="form-control mb-3" name="pesoActual" id="pesoActual" placeholder="Ingrese Peso Actual"
                value="{{$planNutricional->pesoActual}}">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="porcentajeGrasa">% de grasa</label>
            <input disabled type="text" class="form-control mb-3" name="porcentajeGrasa" id="porcentajeGrasa"
                placeholder="Ingrese % de grasa" value="{{$planNutricional->porcentajeGrasa}}">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="kgGrasa">Kg de grasa</label>
            <input disabled type="text" class="form-control mb-3" name="kgGrasa" id="kgGrasa" placeholder="Ingrese Kg de grasa"
                value="{{$planNutricional->kgGrasa}}">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <label for="kgMasaMuscular">Kg de masa muscular</label>
            <input disabled type="text" class="form-control mb-3" name="kgMasaMuscular" id="kgMasaMuscular"
                placeholder="Ingrese Kg de masa muscular" value="{{$planNutricional->kgMasaMuscular}}">
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
                            <textarea disabled name="desIntercambio" id="desIntercambio" cols="30"
                                rows="5">{{$planNutricional->desIntercambio}}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="desEjemplo" id="desEjemplo" cols="30"
                                rows="5">{{$planNutricional->desEjemplo}}</textarea>
                        </td>
                    </tr>
                    {{-- /Desayuno --}}
    
                    {{-- MM --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label>MM</label>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="mmIntercambio" id="mmMartes" cols="30"
                                rows="5">{{$planNutricional->desMartes}}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="mmEjemplo" id="desMartes" cols="30"
                                rows="5">{{$planNutricional->desMartes}}</textarea>
                        </td>
                    </tr>
                    {{-- /MM --}}
    
                    {{-- Almuerzo --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label>Almuerzo</label>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="almIntercambio" id="almMartes" cols="30"
                                rows="5">{{$planNutricional->almMartes}}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="almEjemplo" id="almMartes" cols="30"
                                rows="5">{{$planNutricional->almMartes}}</textarea>
                        </td>
                    </tr>
                    {{-- /Almuerzo --}}
    
                    {{-- MT --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label>MT</label>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="mtIntercambio" id="mtMartes" cols="30"
                                rows="5">{{$planNutricional->mtMartes}}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="mtEjemplo" id="mtMartes" cols="30"
                                rows="5">{{$planNutricional->mtMartes}}</textarea>
                        </td>
                    </tr>
                    {{-- /MT --}}
    
                    {{-- Post ejercicio --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label>Post ejercicio</label>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="postEjercicioIntercambio" id="postEjercicioMartes" cols="30"
                                rows="5">{{$planNutricional->postEjercicioMartes}}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="postEjercicioEjemplo" id="postEjercicioMartes" cols="30"
                                rows="5">{{$planNutricional->postEjercicioMartes}}</textarea>
                        </td>
                    </tr>
                    {{-- /Post ejercicio --}}
    
                    {{-- Cena --}}
                    <tr>
                        <td class="border-right border-top-0 ">
                            <label>Cena</label>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="cenaIntercambio" id="cenaMartes" cols="30"
                                rows="5">{{$planNutricional->cenaMartes}}</textarea>
                        </td>
                        <td class="border-right border-top-0 ">
                            <textarea disabled name="cenaEjemplo" id="cenaMartes" cols="30"
                                rows="5">{{$planNutricional->cenaMartes}}</textarea>
                        </td>
                    </tr>
                    {{-- /Cena --}}
    
    
                </tbody>
    
            </table>
    
    
        </div>
    
        <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
            <label>Recomendaciones</label>
            <textarea disabled name="recomendacion" id="recomendacion" cols="40"
                rows="10">{{$planNutricional->recomendacion}}</textarea>
        </div>
    
    </div>

        <div class="d-flex justify-content-end mt-5 mb-5">
            <a class="btn btn-primary mr-3" href="{{ route('planNutricionals.index')}}" role="button">Volver</a>
        </div>
    

    @endsection
