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
        $articulo=Articulo::all();
        return view('index',array('titulo'=>$titulo,'capitulo'=>$capitulo,'articulo'=>$articulo));
    }

    public function getEdit(){
        return view('partials.edit');
    }

    public function getEditTit($id){
        return view('partials.editTit',array('Contenido'=>Titulo::findOrFail($id)));
    }

    public function putEditTit(Request $request, $id){
        $titulo = Titulo::findOrFail($id);
        $titulo->nombre = $request->nombre;
        $titulo->save();
        return redirect('/buscar/3/'.$titulo->id);
    }

    public function getEditCap($id){
        return view('partials.editCap',array('Contenido'=>Capitulo::findOrFail($id)));
    }

    public function putEditCap(Request $request, $id){
        $capitulo = Capitulo::findOrFail($id);
        $capitulo->nombre = $request->nombre;
        $capitulo->save();
        return redirect('/buscar/2/'.$capitulo->id);
    }

    public function getEditArt($id){
        return view('partials.editArt',array('Contenido'=>Articulo::findOrFail($id)));
    }

    public function putEditArt(Request $request, $id){
        $articulo = Articulo::findOrFail($id);
        $articulo->nombre = $request->nombre;
        $articulo->contenido = $request->contenido;
        if($request->hasfile('imagen')){
            $file = $request->file('imagen');
            $nameFile = time()."-".$file->getClientOriginalName();
            $ruta = "/public/img/".$nameFile;
            $file->move(public_path().'/img', $nameFile);
            $articulo->img = $ruta;
        }
        if($request->hasfile('video')){
            $fileV = $request->file('video');
            $nameFileV = time()."-".$fileV->getClientOriginalName();
            $rutaV = "/public/video/".$nameFileV;
            $fileV->move(public_path().'/video', $nameFileV);
            $articulo->vid = $rutaV;
        }
        $articulo->save();
        return redirect('/buscar/3/'.$articulo->id);
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
        $titulo = Titulo::all();
        $capitulo = Capitulo::all();
        $articulo = Articulo::all();
        return view('partials.buscar',array('titulo'=>$titulo,'capitulo'=>$capitulo,'articulo'=>$articulo));
    }
    
    public function getBuscarTitUrl(Request $request){
        $id = $request->titulo;
        return redirect('/buscar/1/'.$id);
    }

    public function getBuscarCapUrl(Request $request){
        $id = $request->capitulo;
        return redirect('/buscar/2/'.$id);
    }
    public function getBuscarArtUrl(Request $request){
        $id = $request->articulo;
        return redirect('/buscar/3/'.$id);
    }

    public function getBuscarTit($id){
        return view('partials.buscarTit',array('Titulo'=>Titulo::findOrFail($id)));
    }
    public function getBuscarCap($id){
        return view('partials.buscarCap',array('Capitulo'=>Capitulo::findOrFail($id)));
    }
    public function getBuscarArt($id){
        return view('partials.buscarArt',array('Articulo'=>Articulo::findOrFail($id)));
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

    public function postBuscar(Request $request){
        return view('partials.buscar');
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
        if($request->hasfile('imagen')){
            $file = $request->file('imagen');
            $nameFile = time()."-".$file->getClientOriginalName();
            $ruta = "/public/img/".$nameFile;
            $file->move(public_path().'/img', $nameFile);
            $titulo->img= $ruta;
        }
        if($request->hasfile('video')){
            $fileV = $request->file('video');
            $nameFileV = time()."-".$fileV->getClientOriginalName();
            $rutaV = "/public/video/".$nameFileV;
            $fileV->move(public_path().'/video', $nameFileV);
            $titulo->vid= $rutaV;
        }
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

