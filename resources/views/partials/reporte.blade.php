@extends('layouts.master')
@section('content')
<h3>Ley 843 de 2003</h3>
<h2>Reporte de la ley</h2>
<p>Total de títulos: {{$titulos}}</p>
<p>Total de capítulos: {{$capitulos}}</p>
<p>Total de artículos: {{$articulos}}</p>
<a href="/"  class="btn btn-outline-secondary" >Volver al inicio</a>
@stop