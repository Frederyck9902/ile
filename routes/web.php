<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/edit", 'App\\Http\\Controllers\\LeyController@getEdit');

Route::get("/añadir", 'App\\Http\\Controllers\\LeyController@getAñadir');

Route::get("/eliminar", 'App\\Http\\Controllers\\LeyController@getEliminar');

Route::get("/buscar", 'App\\Http\\Controllers\\LeyController@getBuscar');

Route::get("/reporte", 'App\\Http\\Controllers\\LeyController@getReporte');

Route::get("/nosotros", 'App\\Http\\Controllers\\LeyController@getNosotros');

//Route::middleware(['auth:sanctum', 'verified'])->get('/', 'App\\Http\\Controllers\\LeyController@getIndex');
