<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Titulo;
use App\Models\Capitulo;
use App\Models\Articulo;

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
        $titulo= Titulo::all();
        $capitulo= Capitulo::all();
        return view('partials.añadir',array('titulo'=>$titulo,'capitulo'=>$capitulo));
    }

    public function getEliminar(){
        $titulo = Titulo::all();
        $capitulo = Capitulo::all();
        $articulo = Articulo::all();
        return view('partials.eliminar',array('titulo'=>$titulo,'capitulo'=>$capitulo,'articulo'=>$articulo));
    }

    public function getBuscar(){
        return view('partials.buscar');
    }
    
    public function getReporte(){
        $titulos = DB::table('titulos')->count();
        $capitulos = DB::table('capitulos')->count();
        $articulos = DB::table('articulos')->count();
        return view('partials.reporte',array('titulos'=>$titulos,'capitulos'=>$capitulos,'articulos'=>$articulos));
    }

    public function getNosotros(){
        return view('partials.nosotros');
    }

    public function postTitulo(Request $request){
        $titulo = new Titulo;
        $titulo->nombre=$request->title;
        $titulo->save();
        return redirect('reporte');
    }

    public function postCapitulo(Request $request){
        $titulo = new Capitulo;
        $id = DB::table('titulos')->where('nombre', $request->titulo)->value('id');
        $titulo->id_titulo=$id;
        $titulo->nombre=$request->capitulo;
        $titulo->save();
        return redirect('reporte');
    }

    public function postArticulo(Request $request){
        $titulo = new Articulo;
        $id = DB::table('capitulos')->where('nombre', $request->capitulo)->value('id');
        $titulo->id_capitulo=$id;
        $titulo->nombre=$request->articulo;
        $titulo->contenido=$request->contenido;
        $titulo->save();
        return redirect('reporte');
    }

    public function postEliminar(Request $request){
        $tabla=$request->articulo;
        $tablac=$request->capitulo;
        $tablat=$request->titulo;
        DB::table('titulos')->where('nombre',$tablat)->delete();
        DB::table('capitulos')->where('nombre',$tablac)->delete();
        DB::table('articulos')->where('nombre',$tabla)->delete();
        return redirect('reporte');
    }
}

