<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titulo;
use App\Models\Capitulo;

class LeyController extends Controller
{
    //
    public function getIndex(){
		$titulo= Titulo::all();
        $capitulo=Capitulo::all();
        return view('index',array('titulo'=>$titulo,'capitulo'=>$capitulo));
    }

    public function getEdit(){
        return view('partials.edit');
    }

    public function getAñadir(){
        return view('partials.añadir');
    }

    public function getEliminar(){
        return view('partials.eliminar');
    }

    public function getBuscar(){
        return view('partials.buscar');
    }
    
    public function getReporte(){
        return view('partials.reporte');
    }

    public function getNosotros(){
        return view('partials.nosotros');
    }
}

