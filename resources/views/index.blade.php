@extends('layouts.master')
@section('content')
<?php
  $elementos= array($titulo,$capitulo,$articulo);

?> 
<div class="content text-center">              
        @foreach( $titulo as $tit)
        <h2>{{$tit->nombre}}</h2>   
          @foreach( $capitulo as $cap) 
            <?php if ($cap->id_titulo == $tit->id) {
              echo "<h3>{{$cap->nombre}}</h3>";
            };   
            ?>
              @foreach( $articulo as $art) 
                <?php if ($art->id_capitulo == $cap->id) {
                  echo "<h4>{{$art->nombre}}</h4>";
                  echo "<h4>{{$art->contenido}}</h4>";
                };   
                ?>       
            @endforeach            
          @endforeach     
        @endforeach
</div>
@stop