@csrf
<div class="form-group">
    <label for="nombre">Nombre del rol:</label>
    <input type="text" class="form-control @error('nombre') is-invalid @else border-0 @enderror" name="nombre"
        id="nombre" placeholder="Ingrese el nombre del rol"
        value="{{old('nombre', $rol->nombre)}}">
    @error('nombre')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>

<div class="d-flex justify-content-end mt-5">
    <a class="btn btn-primary mr-3" href="{{route('rols.index')}}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{$btnText ?? ''}}</button>
</div>