<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Ver Pelicula</title>
</head>


<body>
    @extends('layouts.master')
    @section('content')
    
    <a href="añadir"  class="btn btn-outline-secondary" >Añadir Información</a>
    <a href="buscar"  class="btn btn-outline-secondary" >Buscar Información</a>
    <a href="eliminar"  class="btn btn-outline-secondary" >Eliminar Información</a>
    @stop
<body>