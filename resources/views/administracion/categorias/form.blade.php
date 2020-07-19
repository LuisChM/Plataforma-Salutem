@csrf
                    <div class="form-group">
                        <label for="tipoCategoria">Nombre de la Categoria:</label>
                        <input type="text" class="form-control @error('tipoCategoria') is-invalid @else border-0 @enderror" name="tipoCategoria" id="tipoCategoria"
                            placeholder="Ingrese el nombre de la categoria (obligatorio)"
                            value="{{old('tipoCategoria', $categorias->tipoCategoria)}}">
                            @error('tipoCategoria')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                    </div>
                    
    
                    <div class="d-flex justify-content-end mt-5">
                        <a class="btn btn-primary mr-3" href="{{route('categorias.index')}}" role="button">Volver</a>
                    <button class="btn btn-secondary text-white">{{$btnText}}</button>
                    </div>
    