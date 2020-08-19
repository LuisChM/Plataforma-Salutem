@extends('layouts.dashboard')
@section('seccion')
    Editar Comida
@endsection


@section('contenido')

    <div class="container mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">


                    <form action="{{ url('ventas/' . $ventas->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <label for="nombre_comida ">{{ 'Nombre de producto:' }}</label>

                        <input class="form-control @error('nombre_comida') is-invalid @else border-0 @enderror"
                                placeholder="Ingrese el nombre de la comida" type="text" name="nombre_comida"
                                id="nombre_comida" value="{{ $ventas->nombre_comida }}">

                            @error('nombre_comida')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">

                            <label for="descripcion">{{ 'Descripcion:' }}</label>

                        <textarea class="form-control @error('descripcion') is-invalid @else border-0 @enderror"
                                placeholder="Ingrese la descripcion de la comida" id="descripcion" name="descripcion"
                                rows="4" cols="50" value="">{{ $ventas->descripcion }} </textarea>

                            @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>



                        <div class="form-group">

                            <label for="precio ">{{ 'Precio:' }}</label>
                        <input class="form-control @error('precio') is-invalid @else border-0 @enderror"
                                placeholder="Ingrese le precio de la comida" type="text" name="precio" id="precio"
                                value="{{ $ventas->precio }}">

                            @error('precio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="d-flex justify-content-end mt-5">
                            <a href="{{ route('ventas.index') }}" class="btn btn-primary mr-3">Volver</a>
                            <input type="submit" value="Editar" class="btn btn-secondary text-white"
                                onclick="return confirm('Desea editar?')">

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection
