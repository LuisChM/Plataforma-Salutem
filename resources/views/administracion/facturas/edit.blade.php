@extends('administracion.facturas.layout_control')
@section('contenido_factura')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form class="mt-4" enctype="multipart/form-data" action="{{route('facturas.store')}}" method="POST"> 
                @csrf 
                <div class="form-group">
                    <label for="nombre">Nombre de la Factura:</label>
                    <input type="text" class="form-control" id="nombre"
                        placeholder="Ingrese el nombre de la factura (obligatorio)">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="number" class="form-control" id="telefono" placeholder="Ingrese un teléfono (opcional)">
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" placeholder="Ingrese un correo (opcional)">
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

                <button type="submit" class="btn btn-secondary text-white d-flex mx-auto mb-2 mt-4">Guardar</button>

            </form>
        </div>
    </div>
</div>
@endsection
