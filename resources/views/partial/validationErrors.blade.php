@if ($errors->any())
<div class="alert alert-danger">
<ul class="mb-0">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif

{{-- mostrar todos los errores en grupo 
    <ul>  
        @if ($errors->any())  any para preguntar si hay un error 
            @foreach ($errors->all() as $error) all para ver los errores de validacion  
                <li>{{$error}}</li>
    @endforeach
    @endif
    </ul> --}}