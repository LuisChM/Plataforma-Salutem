@csrf
<div class="form-group">
    <label for="nombre">Nombre del rol:</label>
    <input type="text" class="form-control @error('nombre') is-invalid @else border-0 @enderror" name="nombre"
        id="nombre" placeholder="Ingrese el nombre del rol"
        value="{{old('nombre', $role->nombre)}}">
    @error('nombre')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="display_nombre">Nombre a mostrar:</label>
    <input type="text" class="form-control " name="display_nombre"
        id="display_nombre" placeholder="Ingrese el nombre a mostrar"
        value="{{old('display_nombre', $role->display_nombre)}}">
</div>
<div class="form-group">
    <label for="descripcion">Descripcion:</label>
    <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="3">{{old('descripcion', $role->descripcion)}}</textarea>
</div>

<div class="d-flex justify-content-end mt-5">
    <a class="btn btn-primary mr-3" href="{{route('roles.index')}}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{$btnText ?? ''}}</button>
</div>