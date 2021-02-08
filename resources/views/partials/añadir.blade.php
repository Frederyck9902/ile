@extends('layouts.master')
@section('content')
<h3>Ley 843 de 2003</h3>
<h2>¿Que deseas añadir?</h2>
<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Seleccionar opción</option>
  <option value="1">Titulo</option>
  <option value="2">Aticulo</option>
  <option value="3">Capitulo</option>
</select>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Información a añadir</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<a href="#"  class="btn btn-outline-secondary" >Añadir Video</a>
<a href="#"  class="btn btn-outline-secondary" >Añadir Imagen</a>
<a href="#"  class="btn btn-outline-secondary" >Guardar</a>
<a href="/"  class="btn btn-outline-secondary" >Volver al inicio</a>

@stop