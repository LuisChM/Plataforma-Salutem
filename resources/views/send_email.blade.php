@extends('layouts.dashboard')
@section('seccion')
Envio de correos
@endsection

@section('contenido')

<div class="container mt-5">
  <h3 class="align-content-center">Envio de correos a los clientes</h3><br />
  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert"></button>
    <strong>{{ $message }}</strong>
  </div>
  @endif
     {{-- buscar correo --}}
     <div class="d-flex justify-content-end align-content-center">
      <form class="form-inline">
        <div class="form-group mx-sm-3 m-2">
          <input type="search" class="form-control searchInput" name="buscarpor" placeholder="Buscar corrreo">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
      </form>
    </div>
    {{-- /buscar correo --}}
    <div class="responsive-table">
      <table class="table table-striped mt-4 text-center">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">E-Mails</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario)
          <tr>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->email}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $usuarios->links() }}
    </div>

  <div class="d-flex justify-content-end align-content-center">
    
    <div class="input-group mb-3">
      <input type="text" id="texto" class="form-control" value="{{$results->pluck('email')->implode(', ')}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-secondary" onclick="copiarAlPortapapeles();" type="button">copiar todos</button>
      </div>
    </div>
  </div>
  <form method="post" enctype="multipart/form-data" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}

          
          <div class="form-group">

                <label>Escriba el correo del cliente:</label>
          <input type="email" name="email" class="form-control" value="" multiple />
                @if(count($errors) > 0)
                <label style="color: red"> {{$errors->first('email')}}</label>
                @endif
          </div>

    <div class="form-group">
      <label>Escriba un tema inicial:</label>
      <input type="text" name="tema" class="form-control" value="" />
    </div>

    <div class="form-group">
      <label>Adjunto:</label>
      <input type="file" name="archivo" class="form-control" multiple>
      @if(count($errors) > 0)
      <label style="color: red"> {{$errors->first('archivo')}}</label>
      @endif
    </div>

    <div class="form-group">
      <label>Escriba el mensaje:</label>
      <textarea class="form-control" id="message" name="message"  rows="6"> </textarea>
    </div>

    <div class="form-group">
      <input type="submit" name="send" class="btn btn-primary" value="Enviar correo" />
    </div>

  </form>
  <script>
    function copiarAlPortapapeles() {
        let texto = document.getElementById('texto');
        texto.select();
        texto.setSelectionRange(0, 99999);
        document.execCommand('copy');
    }
</script>
  @endsection
  

 