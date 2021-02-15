@extends('layouts.master')
@section('content')
<div class="container">
    <form method="POST">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="title">Titulo</label>
            <textarea type="text" class="form-control" id="nombre" name="nombre" >{{$Contenido->nombre}}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-secondary">Actualizar titulo</button>
        <a class="btn btn-outline-secondary" href="/buscar">Cancelar</a>
    </form> 
</div>
@stop
