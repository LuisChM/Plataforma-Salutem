@extends('layouts.dashboard')
@section('seccion')
    Editar Comida
@endsection


@section('contenido')

    <div class="container mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">


                    <form action="{{ url('estadisticascomida/' . $ventas->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <label for="nombre_comida ">{{ 'Nombre de Comida:' }}</label>

                        <input class="form-control @error('nombre_comida') is-invalid @else border-0 @enderror"
                                placeholder="Ingrese el nombre de la comida" type="text" disabled="disabled" name="nombre_comida"
                                id="nombre_comida" value="{{ $ventas->nombre_comida }}" required>

                            @error('nombre_comida')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nuevaCantidad">{{ 'Cantidad de ventas' }}</label>

                        <input class="form-control @error('cantidad') is-invalid @else border-0 @enderror"
                                placeholder="Ingrese la cantidad" type="number" name="nuevaCantidad" id="nuevaCantidad"
                                value="" min="1" pattern="^[0-9]+" required>
                            @error('cantidad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>





                        <div class="d-flex justify-content-end mt-5">
                            <a href="{{ route('estadisticascomida.index') }}" class="btn btn-primary mr-3">Volver</a>
                            <input type="submit" value="Agregar Venta" class="btn btn-secondary text-white"
                                onclick="return confirm('Desea editar?')" >

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection
