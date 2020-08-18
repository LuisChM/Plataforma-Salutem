@extends('layouts.dashboard')
@section('seccion')
    Editar productos
@endsection


@section('contenido')

    <div class="container mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">


                    <form action="{{ url('productos/' . $producto->id) }}" method="post" style="margin:0 auto">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}


                        <div class="form-group">
                            <label for="nombre ">{{ 'Nombre de producto:' }}</label>

                            <input class="form-control @error('nombre') is-invalid @else border-0 @enderror" type="text"
                                placeholder="Ingrese el nombre del producto" name="nombre" id="nombre"
                                value="{{ $producto->nombre }}">

                            @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">

                            <label for="cantidad ">{{ 'Cantidad:' }}</label>

                        <input class="form-control @error('cantidad') is-invalid @else border-0 @enderror" type="text"
                                name="cantidad" placeholder="Ingrese la cantidad" id="cantidad"
                                value="{{ $producto->cantidad }}">

                            @error('cantidad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group">

                            <label for="unidad_de_medida ">{{ 'Unidad de medida:' }}</label>

                        <input class="form-control @error('unidad_de_medida') is-invalid @else border-0 @enderror"
                                type="text" name="unidad_de_medida" id="unidad_de_medida"
                                placeholder="Ingrese la unidad de medida" value="{{ $producto->unidad_de_medida }}">

                            @error('unidad_de_medida')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                        </div>

                        <div class="d-flex justify-content-end mt-5">

                            <a href="{{ route('productos.index') }}" class="btn btn-primary mr-3">Volver</a>
                            <input type="submit" value="Editar" class="btn btn-secondary text-white"
                                onclick="return confirm('Desea editar?')">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
