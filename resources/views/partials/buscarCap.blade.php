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
        <h1>{{$Capitulo->nombre}}</h1>
        <a href="{{ url('edit/2/' .$Capitulo->id)}}" $>Editar</a>
    </div>

    @stop
<<body>