@extends('layouts.master')
@section('content')
<script>
  $(document).ready(function(){
      $("#titulo").on({
          click:function(){
              $("#form-titulo").show();
              $("#form-capitulo").hide();
              $("#form-articulo").hide();
          },
      });
      $("#añadir-titulo").on({
          click:function(){
            $("#form-titulo").hide();
          },
      }); 

      $("#capitulo").on({
          click:function(){
            $("#form-capitulo").show();
            $("#form-titulo").hide();
            $("#form-articulo").hide();
          },
      });

       $("#añadir-capitulo").on({
          click:function(){
            $("#form-capitulo").hide();
          },
      });

      $("#articulo").on({
          click:function(){
            $("#form-articulo").show();
            $("#form-capitulo").hide();
            $("#form-titulo").hide();
          },
      });

      $("#añadir-articulo").on({
          click:function(){
            $("#form-articulo").hide();
          },
      });  
  });
</script>

<h3>Ley 843 de 2003</h3>
<h2>¿Que deseas añadir?</h2>

  <button id="titulo" class="btn btn-outline-secondary">Título</button>
  <button id="capitulo" class="btn btn-outline-secondary">Capítulo</button>
  <button id="articulo" class="btn btn-outline-secondary">Artículo</button>
  
  <div id="form-titulo" class="row" style="margin-top:40px; display:none">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir Título
         </div>
         <div class="card-body" style="padding:30px">
         <form method="POST" action="{{ action('App\\Http\\Controllers\\LeyController@postTitulo') }}">
               {{ csrf_field() }}

               <div class="form-group">
                  <label for="title">Nombre del título</label>
                  <input type="text" name="title" id="title" class="form-control">
               </div>
               <div class="form-group text-center">
                  <button id="añadir-titulo" type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                     Añadir título
                  </button>
               </div>
         </form>

         </div>
      </div>
   </div>
</div>

<div id="form-capitulo" class="row" style="margin-top:40px; display:none">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir Capítulo
         </div>
         <div class="card-body" style="padding:30px">
         <form method="POST" action="{{ action('App\\Http\\Controllers\\LeyController@postCapitulo') }}">
               {{ csrf_field() }}
               <select name="titulo" id="titulo" class="form-select" aria-label="Default select example">
                  <option selected disable >Seleccione Título</option>
                  @foreach($titulo as $tit)
                  <option  value="{{$tit->nombre}}">{{$tit->nombre}}</option>
                  @endforeach
               </select>

               <div class="form-group">
                  <label for="title">Nombre del capítulo</label>
                  <input type="text" name="capitulo" id="capitulo" class="form-control">
               </div>
               <div class="form-group text-center">
                  <button id="añadir-capitulo" type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                     Añadir capítulo
                  </button>
               </div>
         </form>

         </div>
      </div>
   </div>
</div>

<div id="form-articulo" class="row" style="margin-top:40px; display:none">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir Artículo
         </div>
         <div class="card-body" style="padding:30px">
         <form method="POST" action="{{ action('App\\Http\\Controllers\\LeyController@postArticulo') }}">
               {{ csrf_field() }}

               <select name="capitulo" id="capitulo" class="form-select" aria-label="Default select example">
                  <option selected disable >Seleccione Capítulo</option>
                  @foreach($capitulo as $cap)
                  <option  value="{{$cap->nombre}}">{{$cap->nombre}}</option>
                  @endforeach
               </select>
               <div class="form-group">
                  <label for="title">Nombre del artículo</label>
                  <input type="text" name="articulo" id="articulo" class="form-control">
               </div>
               <textarea name="contenido" id="contenido" cols="30" rows="10"></textarea>
                  <button id="añadir-articulo" type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                     Añadir título
                  </button>
               </div>
         </form>

         </div>
      </div>
   </div>
</div>

<div style="display:block">
<a href="#"  class="btn btn-outline-secondary" >Añadir Video</a>
<a href="#"  class="btn btn-outline-secondary" >Añadir Imagen</a>
<a href="/"  class="btn btn-outline-secondary" >Volver al inicio</a>
</div>
@stop