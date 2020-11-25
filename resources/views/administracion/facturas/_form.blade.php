@csrf
<div class="form-group">
    <label for="nombre">Nombre de la Factura:</label>
    <input type="text" class="form-control  @error('nombre') is-invalid @enderror" name="nombre" id="nombre"
        placeholder="Ingrese el nombre de la factura (obligatorio)" value="{{ old('nombre', $factura->nombre) }}">
    @error('nombre')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="telefono">Teléfono:</label>
    <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Ingrese un teléfono (opcional)"
        value="{{ old('telefono', $factura->telefono) }}">
</div>
<div class="form-group">
    <label for="correo">Correo:</label>
    <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese un correo (opcional)"
        value="{{ old('correo', $factura->correo) }}">
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"
        placeholder="Ingrese una descripción (opcional)">{{ old('descripcion', $factura->descripcion) }}</textarea>
</div>
<div class="form-group ">
    <label for="fecha">Fecha:</label>
    <div class="d-flex align-items-center ">
        <input type="date"
        class="form-control col-lg-4 col-lg-4 col-md-4 @error('fecha') is-invalid @else border-0 @enderror"
            name="fecha" id="fecha" value="{{ old('fecha', $factura->fecha) }}">
        <span class="text-black-50 ml-2">(obligatorio)</span>
        @error('fecha')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group ">
    <label for="total">Total de la factura:</label>
    <div class="d-flex align-items-center ">
    <input type="number" class="form-control col-lg-4 col-md-4 @error('total') is-invalid @else border-0 @enderror"
            name="total" id="total" value="{{ old('total', $factura->total) }}" data-decimals="2" min="0" step="0.01">
        <span class="text-black-50 ml-2">(obligatorio)</span>
        @error('total')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="imagen">Seleccione una imagen para guardar:</label>
<!-- Button trigger modal -->
<button type="button" class="btn " data-toggle="modal" data-target="#exampleModalCenter">
    <img src="{{ Storage::url($factura->imagen) }}" alt="" style="width:100%;max-width:300px">
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content  bg-none border-0">
            <div class="modal-header border-0">
                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white font-weight-bold">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{ Storage::url($factura->imagen) }}" alt="" style="width:100%;height: 100%;">
            </div>
        </div>
    </div>
</div>
    <input type="file" class="form-control-file" name="imagen" id="imagen">
</div>



<div class="d-flex justify-content-end mt-5 mb-5">
    <a class="btn btn-primary mr-3" href="{{ route('facturas.index') }}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{ $btnText ?? '' }}</button>
</div>
