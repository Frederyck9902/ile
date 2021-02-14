
@extends('layouts.master')
@section('content')
<div class="container">
    <form method="POST">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <div class="form-group">
            <label for="title">Capitulo</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="{{$Contenido->nombre}}">
        </div>
        <button type="submit" class="btn btn-outline-secondary">Actualizar </button>
        <a class="btn btn-outline-secondary" href="/buscar">Cancelar</a>
    </form>
</div>
@stop
