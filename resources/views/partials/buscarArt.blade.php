<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Buscar pelicula</title>
</head>


<body>

@extends('layouts.master')
@section('content')
<div class="container">
    <?php if ($Articulo->img != null) {
        echo'<img alt="Hola">
            <source src="http://localhost/ile{{$Articulo->img}}">
        </img>';

    };
    if ($Articulo->img != null) {
        echo'<video src="http://localhost/ile{{$Articulo->vid}}" controls></video>';
    };
    ?>
    <h1 style="text-align:center">{{$Articulo->nombre}}</h1>
    <p style="text-align:justify">{{$Articulo->contenido}}</p>
</div>
<div class="row">
    <div class="col-sm-12" style="text-align:center; margin-top:20px">
        @if( Auth::check() ) 
            <a href="{{ url('edit/3/' .$Articulo->id)}}"  class="btn btn-outline-secondary" >Editar</a>
        @elseif(!Auth::check())
            <a class="nav-link" href="login">Inicia sesión para editar</a> 
        @endif
        
      <a href="/buscar"  class="btn btn-outline-secondary" >Volver al buscador</a>
    </div>
</div>
</body>

@stop
