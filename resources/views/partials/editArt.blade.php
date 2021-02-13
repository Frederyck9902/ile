@extends('layouts.master')
@section('content')
<div class="container">
<form method="POST">
    {{ csrf_field() }}
    {{method_field('PUT')}}
    <div class="form-group">
        <label for="title">Articulo</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="{{$Contenido->nombre}}">
    </div>
    <div class="form-group">
        <label for="title">Contenido</label>
        <textarea type="text" class="form-control" id="contenido" name="contenido"  rows="3">{{$Contenido->contenido}}
        </textarea>
    </div>
    <button type="submit" class="btn btn-outline-secondary">Actualizar articulo</button>
</form>
</div>

@stop
