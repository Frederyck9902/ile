@extends('layouts.master')
@section('content')
<script>
  $(document).ready(function(){
      $("#titulo").on({
          click:function(){
              $("#select-titulo").show();
              $("#select-capitulo").hide();
              $("#select-articulo").hide();
          },
      });

      $("#capitulo").on({
          click:function(){
            $("#select-capitulo").show();
            $("#select-titulo").hide();
            $("#select-articulo").hide();
          },
      });

      $("#articulo").on({
          click:function(){
            $("#select-articulo").show();
            $("#select-capitulo").hide();
            $("#select-titulo").hide();
          },
      });
  });
</script>

<div class="container">
  <div class="row">
      <div class="col-sm-12" style="text-align:center">
         <h3>Ley 843 de 2003</h3>
         <h2>¿Que deseas eliminar?</h2>
      </div>
  </div>

  <div class="row">
      <div class="col-sm-12" style="text-align:center">
         <button id="titulo" class="btn btn-outline-secondary">Título</button>
         <button id="capitulo" class="btn btn-outline-secondary">Capítulo</button>
         <button id="articulo" class="btn btn-outline-secondary">Artículo</button>
      </div>
  </div>
</div>




<div  id="select-titulo" class="row" style="margin-top:40px; display:none">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Eliminar Título
         </div>
         <div class="card-body" style="padding:30px">
            <form method="POST">
            {{ csrf_field() }}
            <select name="titulo" class="form-select" aria-label="Default select example" style="width: 477px">
            <option selected disable >Seleccione Título</option>
            @foreach($titulo as $tit)
            <option  value="{{$tit->nombre}}">{{$tit->nombre}}</option>
            @endforeach
            </select>
            <div class="form-group text-center">
               <button type="submit" class="btn btn-outline-secondary" style="padding:8px 100px;margin-top:25px">Eliminar</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>

<div id="select-capitulo"  class="row" style="margin-top:40px; display:none">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Eliminar Capítulo
         </div>
         <div class="card-body" style="padding:30px">
            <form method="POST">
            {{ csrf_field() }}
            <select name="capitulo" class="form-select" aria-label="Default select example" style="width: 477px">
            <option selected disable >Seleccione Capítulo</option>
            @foreach($capitulo as $cap)
            <option  value="{{$cap->nombre}}">{{$cap->nombre}}</option>
            @endforeach
            </select>
            <div class="form-group text-center">
               <button type="submit" class="btn btn-outline-secondary" style="padding:8px 100px;margin-top:25px">Eliminar</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>

<div id="select-articulo" class="row" style="margin-top:40px; display:none">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Eliminar Artículo
         </div>
         <div class="card-body" style="padding:30px">
            <form method="POST">
            {{ csrf_field() }}
            <select name="articulo"  class="form-select" aria-label="Default select example" style="width: 477px">
            <option selected disable >Seleccione Artículo</option>
            @foreach($articulo as $art)
            <option  value="{{$art->nombre}}">{{$art->nombre}}</option>
            @endforeach
            </select>
            <div class="form-group text-center">
               <button type="submit" class="btn btn-outline-secondary" style="padding:8px 100px;margin-top:25px">Eliminar</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>

<div class="row">
    <div class="col-sm-12" style="text-align:center; margin-top:20px">
      <a href="/"  class="btn btn-outline-secondary" >Volver al inicio</a>
    </div>
</div>
@stop