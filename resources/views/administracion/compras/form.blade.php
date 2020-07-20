@csrf


<div class="form-group ">
    <label for="cantidad">Cantidad</label>
    <div class="d-flex align-items-center ">
        <input type="number" class="form-control col-lg-4 col-md-4 @error('cantidad') is-invalid @else border-0 @enderror"
            name="cantidad" id="cantidad" value="{{old('cantidad', $compras->cantidad)}}">
        <span class="text-black-50 ml-2">(obligatorio)</span>
        @error('cantidad')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group ">
    <label for="cantidad_agregada">Cantidad Agregada</label>
    <div class="d-flex align-items-center ">
        <input type="number" class="form-control col-lg-4 col-md-4 @error('cantidad_agregada') is-invalid @else border-0 @enderror"
            name="cantidad_agregada" id="cantidad_agregada" value="{{old('cantidad_agregada', $compras->cantidad_agregada)}}">
        <span class="text-black-50 ml-2">(obligatorio)</span>
        @error('cantidad_agregada')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="categoria">Categoria</label>
    <textarea class="form-control" name="categoria" id="categoria" rows="3"
        placeholder="Ingrese una categoria (opcional)">{{old('categoria', $compras->categoria)}}</textarea>
</div>
<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control @error('nombre') is-invalid @else border-0 @enderror" name="nombre"
        id="nombre" placeholder="Ingrese el nombre de la compra (obligatorio)"
        value="{{old('nombre', $compras->nombre)}}">
    @error('nombre')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="unidad_de_medida">unidad_de_medida</label>
    <textarea class="form-control" name="unidad_de_medida" id="unidad_de_medida" rows="3"
        placeholder="Ingrese una unidad_de_medida (opcional)">{{old('unidad_de_medida',
         $compras->unidad_de_medida)}}</textarea>
</div>

<div class="d-flex justify-content-end mt-5">
    <a class="btn btn-primary mr-3" href="{{route('compras.index')}}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{$btnText ?? ''}}</button>
</div>