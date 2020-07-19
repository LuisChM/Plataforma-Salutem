@extends('layout_dashboard')
@section('seccion')
Productos
@endsection

@section('contenido')
<div class="container mt-5">

    <div class="d-flex justify-content-end align-content-center">
        <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2 mr-4">
                <input type="search" class="form-control searchInput"  placeholder="Buscar producto">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
        </form>
    </div>

    <div class="responsive-table">
        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Cantidad disponible</th>
                    <th scope="col">Unidad de medida</th>
                    <th scope="col">Obtener</th>
                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Producto</td>
                    <td>Tipo</td>
                    <td>18kg</td>
                    <td><select>
                            <option value="" disabled selected>Seleccione una medida</option>
                            <option value="1">kg</option>
                            <option value="2">gr</option>
                        </select></td>
                    <td><input type="number" min="1" pattern="^[0-9]+"></td>
                    <td>
                        <div class="d-flex justify-content-around ">
                            <a href="#1"><img src="/img/check.svg" class="iconoAccion" alt="seleccionar"></a>
                        </div>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
</div>
@endsection
