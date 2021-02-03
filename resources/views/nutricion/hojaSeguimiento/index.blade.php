<div class="responsive-table">
    <a class="btn btn-primary mb-3" href="{{ route('pacientes.seguimientos.create', $paciente->id) }}" role="button">Agregar nuevo logro </a>

    <table class="table table-striped mt-4 text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Logro</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($seguimiento as $seguimientos)
                <tr>
                    <td>{{$seguimientos->logrosPlan}}</td>
                     <td>
                            <div class="d-flex justify-content-around">
                                {{-- seleccionar dato por id y editarlo
                                --}}
                                <a href="{{ route('seguimientos.edit',$seguimientos->id)}}"><img src="/img/seleccionar.svg"
                                        class="iconoAccion" alt="seleccionar"></a>

                                        {{-- seleccionar dato por id y mostrarlo
                                --}}
                                <a href="{{ route('seguimientos.show',$seguimientos->id)}}"><img src="/img/check.svg"
                                    class="iconoAccion" alt="seleccionar"></a>
   
                                    {{-- seleccionar dato por id y eliminarlo
                                --}}
                                {{-- <form method="Post" action="{{route('seguimientos.destroy',$seguimientos->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-transparent border-0 delete-confirm" type="submit"><img src="/img/basura.svg" class="iconoAccion"
                                        alt="eliminar"></button>
                                </form> --}}

                
                            </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
