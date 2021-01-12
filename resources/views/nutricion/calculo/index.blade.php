@extends('layouts.dashboard')
@section('seccion')
Control calculo
@endsection

@section('contenido')

    <script type="text/javascript" src="JS/header.js"></script>
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" /> 
  
    
    <div class="iframe" style="position:fixed;top:62px; left:50; width:100%; height:100%;" >
        <iframe name="main" id="main" src="https://docs.google.com/spreadsheets/d/1e1F9xzh4s-AP_eupMcMmcSAApqtS4XA8/edit#gid=958905518"  
        frameborder="0" width="90%" height="90%" align="left">
        <FONT FACE=ARIAL SIZE=3 COLOR="RED">Your Browser doesn't Support Required Component.</FONT></iframe>
    </div>    

  

@endsection