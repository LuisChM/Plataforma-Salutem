@extends('layouts.dashboard')
@section('seccion')
Envio de correos
@endsection

@section('contenido')
    <div class="container mt-5">
   <h3 align="center">Enviar un correo informativo a los clientes</h3><br />
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
   <form method="post" enctype="multipart/form-data" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Escriba un tema inicial:</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Escriba el correo del cliente:</label>
     <input type="email" name="email" class="form-control" multiple/>
    </div>

    <div class="form-group">
      <label>Adjunto:</label>
      <input type="file" name="archivo" class="form-control">
    </div>

    <div class="form-group">
     <label>Escriba el mensaje:</label>
     {{-- <textarea name="message" class="form-control"></textarea> --}}
     <textarea class="form-control" id="summary-ckeditor" name="message"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-primary" value="Enviar correo" />
    </div>
   </form>
   

  </div>
 
@endsection
@section('scripts')
{{-- <script>
  CKEDITOR.replace( 'summary-ckeditor', {
      filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
      filebrowserUploadMethod: 'form'
  });
  </script> --}}

<script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection
