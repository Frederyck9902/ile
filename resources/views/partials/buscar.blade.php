@extends('layouts.master')
@section('content')
<h3>Ley 843 de 2003</h3>
<h2>¿Que deseas buscar?</h2>
<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Seleccionar opción</option>
  <option value="1">Título</option>
  <option value="2">Atículo</option>
  <option value="3">Capítulo</option>
</select>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Texto a buscar</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
</div>
<a href="#"  class="btn btn-outline-secondary" >Buscar</a>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Coincidenacias encontradas</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<a href="#"  class="btn btn-outline-secondary" >Añadir Comentario</a>
<a href="#"  class="btn btn-outline-secondary" >Editar</a>
<a href="/"  class="btn btn-outline-secondary" >Volver al inicio</a>
@stop