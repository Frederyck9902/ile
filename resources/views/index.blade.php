@extends('layouts.master')
@section('content')
<?php
  $elementos= array($titulo,$capitulo);

?> 
<div class="content text-center">              
        @foreach( $elementos as list($titulo,$capitulo)) 
        <div>                                        
          <h4>{{$titulo->nombre}}</h4>
        </div>                        
        @endforeach
</div>
@stop