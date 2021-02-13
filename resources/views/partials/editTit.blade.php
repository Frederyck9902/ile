<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Editar Titulo</title>
</head>


<body>
    @extends('layouts.master')
    @section('content')
    <div class="container">
        <form action="/" method="POST">
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="nombre" placeholder="{{$Contenido->nombre}}">
            </div>
        </form>
        <button type="submit" class="btn btn-outline-secondary">Actualizar titulo</button>
    </div>
    

    @stop
<<body>