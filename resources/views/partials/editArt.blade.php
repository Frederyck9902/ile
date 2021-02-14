@extends('layouts.master')
@section('content')
<div class="container">
<form method="POST" enctype="multipart/form-data">
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
    <div class="form-group">
        <label for="title">Imagen</label>
        <input id="file-input" name="imagen" type="file" class="form-control" rows="3">
        </input>
    </div>

    <div class="form-group">
        <label for="title">Video</label>
        <input id="file-input" name="video" type="file" class="form-control" rows="3">
        </input>
    </div>
    <button type="submit" class="btn btn-outline-secondary">Actualizar articulo</button>
    <a class="btn btn-outline-secondary" href="/buscar">Cancelar</a>
</form>
</div>

@stop
