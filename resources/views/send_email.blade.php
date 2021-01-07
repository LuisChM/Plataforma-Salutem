@extends('layouts.dashboard')
@section('seccion')
Envio de correos
@endsection

@section('contenido')

<div class="container mt-5">
  <h3 class="align-content-center">Enviar un correo informativo a los clientes</h3><br />
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
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
  @endif
     {{-- buscar paciente --}}
     <div class="d-flex justify-content-end align-content-center">
      <form class="form-inline">
        <div class="form-group mx-sm-3 m-2">
          <input type="search" class="form-control searchInput" name="buscarpor" placeholder="Buscar correo">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
      </form>
    </div>
    {{-- /buscar paciente --}}
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


<form method="post" enctype="multipart/form-data" action="{{url('sendemail/send')}}">
    <div class="form-group d-flex justify-content-end">
        {{-- <input type="submit" name="select" class="btn btn-primary" onclick="Buscarcorreos()" value="Seleccionar todo" /> --}}

        <button type="button" onclick="Buscarcorreos({{}});" class="btn btn-outline-success">Save</button>
    </div>
</form>

  <form method="post" enctype="multipart/form-data" action="{{url('sendemail/send')}}">

    {{ csrf_field() }}
    <div class="form-group">
      <label>Escriba el correo del cliente:</label>
    <input type="email" name="email" class="form-control" value="{{$cadena}}" multiple />
      @if(count($errors) > 0)
      <label style="color: red"> {{$errors->first('email')}}</label>
      @endif
    </div>
    <div class="form-group">
      <label>Escriba un tema inicial:</label>
      <input type="text" name="name" class="form-control" value="" />
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
      {{-- <textarea name="message" class="form-control"></textarea> --}}
      <textarea class="form-control" id="message" name="message"  rows="6"> </textarea>
    </div>

    <div class="form-group">
      <input type="submit" name="send" class="btn btn-primary" value="Enviar correo" />
    </div>

  </form>
  @endsection