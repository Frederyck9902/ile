@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="text-align:center">
        <h3>Ley 843 de 2003</h3>
        <h2>Reporte de la ley</h2>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="text-align:center">
        <p> <b style="font-size: 1rem">Total de títulos: </b>{{$titulos}}</p>
        <p> <b style="font-size: 1rem">Total de capítulos:</b> {{$capitulos}}</p>
        <p> <b style="font-size: 1rem">Total de artículos: </b>{{$articulos}}</p>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-sm-12" style="text-align:center; margin-top:20px">
      <a href="/"  class="btn btn-outline-secondary" >Volver al inicio</a>
    </div>
</div>
@stop