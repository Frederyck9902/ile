@extends('layouts.master')
@section('content')
<?php
  $elementos= array($titulo,$capitulo);

?> 
<div class="content text-center">              
        @foreach( $titulo as $tit)
        @foreach( $capitulo as $cap) 
        <div>    
        <h4>{{$tit->nombre}}</h4>                                    
          <h4>{{$cap->nombre}}</h4>
        </div>                        
        @endforeach
        <div>                                        
          
        </div>                        
        @endforeach
</div>
@stop