@csrf
<div class="form-group">
    <label for="descripcion">Nombre de la categoria:</label>
    <input type="text" class="form-control @error('descripcion') is-invalid @else border-0 @enderror" name="descripcion"
        id="descripcion" placeholder="Ingrese el nombre de la categoria"
        value="{{old('descripcion', $categoria->descripcion)}}">
    @error('descripcion')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>

<div class="d-flex justify-content-end mt-5">
    <a class="btn btn-primary mr-3" href="{{route('categorias.index')}}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{$btnText ?? ''}}</button>
</div>