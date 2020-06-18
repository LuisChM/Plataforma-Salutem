@extends('administracion.facturas.layout_control')
@section('contenido_factura')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            @include('partial.session-status')
            @include('partial.validationErrors')

            <form class="mt-4" enctype="multipart/form-data" action="{{route('facturas.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre de la Factura:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre"
                        placeholder="Ingrese el nombre de la factura (obligatorio)"
                        value="{{old('nombre', $factura->nombre)}}">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Ingrese un teléfono (opcional)"
                        value="{{old('telefono', $factura->telefono)}}">
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese un correo (opcional)"
                        value="{{old('correo', $factura->correo)}}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"
                        placeholder="Ingrese una descripción (opcional)">{{old('descripcion', $factura->descripcion)}}</textarea>
                </div>
                <div class="form-group ">
                    <label for="fecha">Fecha:</label>
                    <div class="d-flex align-items-center ">
                        <input type="date" class="form-control col-lg-4 col-lg-4 col-md-4" name="fecha" id="fecha"
                            value="{{old('fecha', $factura->fecha)}}">
                        <span class="text-black-50 ml-2">(obligatorio)</span>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="factura">Total de la factura:</label>
                    <div class="d-flex align-items-center ">
                        <input type="number" class="form-control col-lg-4 col-md-4" name="factura" id="factura"
                            value="{{old('total', $factura->total)}}">
                        <span class="text-black-50 ml-2">(obligatorio)</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="file">Seleccione un archivo o más para guardar:</label>
                    <input type="file" class="form-control-file" name="file" id="file" multiple
                        value="{{old('imagen', $factura->imagen)}}">
                </div>

                <div class="d-flex justify-content-end mt-5">
                    <a class="btn btn-primary mr-3" href="{{route('facturas.index')}}" role="button">Volver</a>
                    <button class="btn btn-secondary text-white">Guardar</button>
                </div>


            </form>

        </div>
    </div>
</div>
@endsection
