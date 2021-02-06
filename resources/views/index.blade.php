@extends('layouts.master')
@section('content')
<div class="row">        
    @foreach( $ley as $key => $pelicula )       
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">                       
          <h4 style="min-height:45px;margin:5px 0 10px 0">                   
          {{$pelicula->ley}}      
           </h4>           
         </a>        
       </div>       
    @endforeach 
</div>
@stop