@csrf
<div class="form-group">
    <label for="nombre">Nombre del producto:</label>
    <input type="text" class="form-control @error('nombre') is-invalid @else border-0 @enderror" name="nombre"
        id="nombre" placeholder="Ingrese el nombre del producto"
        value="{{old('nombre', $producto->nombre)}}">
    @error('nombre')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="cantidad">Cantidad de producto:</label>
    <input type="number" class="form-control @error('cantidad') is-invalid @else border-0 @enderror" name="cantidad"
        id="cantidad" placeholder="Ingrese el cantidad del producto"
        value="{{old('cantidad', $producto->cantidad)}}" min="1" pattern="^[0-9]+" >
    @error('cantidad')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="unidad_de_medida">Unidad de medida del producto:</label>
    <input type="text" class="form-control @error('unidad_de_medida') is-invalid @else border-0 @enderror" name="unidad_de_medida"
        id="unidad_de_medida" placeholder="Ingrese el unidad de medida del producto"
        value="{{old('unidad_de_medida', $producto->unidad_de_medida)}}">
    @error('unidad_de_medida')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>





<div class="d-flex justify-content-end mt-5">
    <a class="btn btn-primary mr-3" href="{{route('productos.index')}}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{$btnText ?? ''}}</button>
</div>