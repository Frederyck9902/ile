<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LeyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", 'App\\Http\\Controllers\\LeyController@getIndex');

Route::get("/edit", [LeyController::class,'getEdit']);

Route::get("/edit/1/{id}", [LeyController::class,'getEditTit']);

Route::get("/edit/2/{id}", [LeyController::class,'getEditCap']);

Route::get("/edit/3/{id}", [LeyController::class,'getEditArt']);

Route::get("/añadir", 'App\\Http\\Controllers\\LeyController@getAñadir');

Route::get("/eliminar", 'App\\Http\\Controllers\\LeyController@getEliminar');

Route::get("/buscar", 'App\\Http\\Controllers\\LeyController@getBuscar');

Route::get("/buscar/1/{id}", [LeyController::class,'getBuscarTit']);

Route::get("/buscar/2/{id}", [LeyController::class,'getBuscarCap']);

Route::get("/buscar/3/{id}", [LeyController::class,'getBuscarArt']);

Route::get("/reporte", 'App\\Http\\Controllers\\LeyController@getReporte');

Route::get("/nosotros", 'App\\Http\\Controllers\\LeyController@getNosotros');

Route::post("/añadir/titulo", 'App\\Http\\Controllers\\LeyController@postTitulo');
Route::post("/añadir/articulo", 'App\\Http\\Controllers\\LeyController@postArticulo');
Route::post("/añadir/capitulo", 'App\\Http\\Controllers\\LeyController@postCapitulo');
//Route::get("/edit/{$selec}/{$id}", [LeyController::class,'postEdit']);
Route::put("/edit/1/{id}", [LeyController::class,'putEditTit']);
Route::put("/edit/2/{id}", [LeyController::class,'putEditCap']);
Route::put("/edit/3/{id}", [LeyController::class,'putEditArt']);

//Route::post("/buscar", 'App\\Http\\Controllers\\LeyController@postBuscar');
Route::post("/eliminar", 'App\\Http\\Controllers\\LeyController@postEliminar');
//Route::middleware(['auth:sanctum', 'verified'])->get('/', 'App\\Http\\Controllers\\LeyController@getIndex');
