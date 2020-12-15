@extends('layouts.dashboard')
@section('seccion')
    Agregar Producto
@endsection

@section('contenido')


    <div class="container mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">



                    <form action="{{ url('productos') }}" method="post">
                        <div class="form-group">
                            {{ csrf_field() }}

                            <div class="form-group">

                                <label for="nombre ">{{ 'Nombre de producto:' }}</label>

                            <input class="form-control @error('nombre') is-invalid @else border-0 @enderror"
                                    placeholder="Ingrese el nombre del producto" type="text" name="nombre" id="nombre"
                                    value="" required>

                                @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <label for="cantidad ">{{ 'Cantidad:' }}</label>

                            <input class="form-control @error('cantidad') is-invalid @else border-0 @enderror"
                                    placeholder="Ingrese la cantidad del producto" type="number" name="cantidad" id="cantidad"
                                    value="" min="1" pattern="^[0-9]+" required>

                                @error('cantidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <label for="unidad_de_medida ">{{ 'Unidad de medida:' }}</label>

                            <input class="form-control @error('unidad_de_medida') is-invalid @else border-0 @enderror"
                                    placeholder="Ingrese la unidad del producto" type="text" name="unidad_de_medida"
                                    id="unidad_de_medida" value="" required>

                                @error('unidad_de_medida')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="d-flex justify-content-end mt-5">

                                <a href="{{ route('productos.index') }}" class="btn btn-primary mr-3">Volver</a>

                                <input type="submit" value="agregar" class="btn btn-secondary text-white">

                            </div>

                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
