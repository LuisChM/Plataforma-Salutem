@extends('layouts.dashboard')
@section('seccion')
Consulta nutricional
@endsection

@section('contenido')
<div class="container">
    <div class="accordion" id="accordionStyle" style="max-width: none">
        <div class="card">
            <div class="card-header bg-dark" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Datos del paciente <img src="/img/anadir2.svg" alt="icono" class="iconoAcordion"> </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionStyle">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf
                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod.
                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                    ea
                    proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                    denim
                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-dark" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Bioquimica <img src="/img/anadir2.svg" alt="icono" class="iconoAcordion"> </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionStyle">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf
                    moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod.
                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                    ea
                    proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                    denim
                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-dark" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Clinica <img src="/img/anadir2.svg" alt="icono" class="iconoAcordion"> </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionStyle">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-dark" id="headingfour">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button" data-toggle="collapse"
                    data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    Recordatorio de 24 horas <img src="/img/anadir2.svg" alt="icono" class="iconoAcordion"> </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionStyle">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header bg-dark" id="headingFive">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left text-white d-flex justify-content-between" type="button" data-toggle="collapse"
                    data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    Hoja de seguimiento <img src="/img/anadir2.svg" alt="icono" class="iconoAcordion"> </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionStyle">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection