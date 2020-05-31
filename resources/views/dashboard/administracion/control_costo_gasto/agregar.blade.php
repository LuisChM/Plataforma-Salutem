@extends('plantilla')
@section('seccion')
Control costo / gasto
@endsection

@section('contenido')
<div class="container mt-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="agregar-tab" data-toggle="tab" href="#agregar" role="tab"
                aria-controls="agregar" aria-selected="true">Agregar</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ver-tab" data-toggle="tab" href="#ver" role="tab" aria-controls="ver"
                aria-selected="false">Ver</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="descartar-tab" data-toggle="tab" href="#descartar" role="tab"
                aria-controls="descartar" aria-selected="false">Descartar</a>

        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="agregar" role="tabpanel" aria-labelledby="agregar-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <form class="mt-4">
                            <div class="form-group">
                                <label for="nombre">Nombre de la Factura:</label>
                                <input type="email" class="form-control" id="nombre"
                                    placeholder="Ingrese el nombre de la factura (obligatorio)">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="email" class="form-control" id="telefono"
                                    placeholder="Ingrese un teléfono (opcional)">
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo:</label>
                                <input type="email" class="form-control" id="correo"
                                    placeholder="Ingrese un correo (opcional)">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" id="descripcion" rows="3"
                                    placeholder="Ingrese una descripción (opcional)"></textarea>
                            </div>
                            <div class="form-group ">
                                <label for="fecha">Fecha:</label>
                                <div class="d-flex align-items-center ">
                                    <input type="date" class="form-control col-lg-4 col-lg-4 col-md-4" id="fecha">
                                    <span class="text-black-50 ml-2">(obligatorio)</span>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="factura">Total de la factura:</label>
                                <div class="d-flex align-items-center ">
                                    <input type="number" class="form-control col-lg-4 col-md-4" id="factura">
                                    <span class="text-black-50 ml-2">(obligatorio)</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="file">Seleccione un archivo o más para guardar:</label>
                                <input type="file" class="form-control-file" id="file" multiple>
                            </div>

                            <button type="submit"
                                class="btn btn-secondary text-white d-flex mx-auto mb-2 mt-4">Guardar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade " id="ver" role="tabpanel" aria-labelledby="ver-tab">
            <div class="responsive-table">
                <table class="table table-striped mt-4 text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre de la factura</th>
                            <th scope="col">Fecha de facturación</th>
                            <th scope="col">Total</th>
                            <th scope="col">Acción</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Factura</td>
                            <td>20/02/2020</td>
                            <td>500.000</td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <a href="#1"><img src="/img/seleccionar.svg" class="iconoAccion"
                                            alt="seleccionar"></a>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="descartar" role="tabpanel" aria-labelledby="descartar-tab">
            <div class="responsive-table">
                <table class="table table-striped mt-4 text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre de la factura</th>
                            <th scope="col">Fecha de facturación</th>
                            <th scope="col">Total</th>
                            <th scope="col">Acción</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Factura</td>
                            <td>20/02/2020</td>
                            <td>500.000</td>
                            <td>
                                <div class="d-flex justify-content-around ">
                                    <a href="#1"><img src="/img/check.svg" class="iconoAccion" alt="seleccionar"></a>
                                    <a href="#2"><img src="/img/basura.svg" class="iconoAccion" alt="seleccionar"></a>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
