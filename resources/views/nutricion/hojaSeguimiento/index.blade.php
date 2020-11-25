<div class="responsive-table">
    <a class="btn btn-primary mb-3" href="{{ route('seguimientos.create') }}" role="button">Agregar nuevo logro </a>

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
                </tr>
                @endforeach


            </tbody>
        </table>
        {{ $seguimiento->links()}}

</div>
