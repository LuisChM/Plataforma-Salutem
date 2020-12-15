@extends('layouts.dashboard')
@section('seccion')
    Consulta Nutricional
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
                            <div class="card-header bg-collapse-gray" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button"
                                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
                                        aria-controls="collapseFive">
                                        Hoja de seguimiento <img src="/img/anadir.svg" alt="icono" class="iconoAcordion"> </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionStyle">
                                <div class="card-body">
                                    @include('nutricion.hojaSeguimiento.index')
                                </div>
                            </div>
                        </div>
                        </div>
                        @include('nutricion.pacientes._form',['btnText'=>'Guardar'])


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
