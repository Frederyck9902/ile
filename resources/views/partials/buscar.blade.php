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
      <h2>¿Que deseas buscar?</h2>
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
          Buscar Título
        </div>
        <div class="card-body" style="padding:30px">
            <form action="/buscar/1" method="GET">
              {{ csrf_field() }}
              <select name="titulo" class="form-select" aria-label="Default select example" style="width: 477px">
                  <option selected disable >Seleccione Título</option>
                @foreach($titulo as $tit)
                  <option  value="{{$tit->id}}" id="{{$tit->id}}">{{$tit->nombre}}</option>
                @endforeach
              </select>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-secondary" style="padding:8px 100px;margin-top:25px" >Buscar</button>
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
          Buscar capitulo
        </div>
          <div class="card-body" style="padding:30px">
            <form action="/buscar/2" method="GET">
            {{ csrf_field() }}
              <select name="capitulo" class="form-select" aria-label="Default select example" style="width: 477px">
                <option selected disable >Seleccione Capítulo</option>
                @foreach($capitulo as $cap)
                  <option  value="{{$cap->id}}" id="{{$cap->id}}">{{$cap->nombre}}</option>
                @endforeach
              </select>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-secondary" style="padding:8px 100px;margin-top:25px" >Buscar</button>
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
          Buscar articulo
        </div>
          <div class="card-body" style="padding:30px">
            <form action="/buscar/3" method="GET">
              {{ csrf_field() }}
              <select name="articulo"  class="form-select" aria-label="Default select example" style="width: 477px">
                <option selected disable >Seleccione Artículo</option>
                  @foreach($articulo as $art) 
                    <option value="{{$art->id}}">{{$art->nombre}}</option> 
                    <?php $key=$art->id ?>                    
                  @endforeach
              </select>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-secondary" style="padding:8px 100px;margin-top:25px" >Buscar</button>
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