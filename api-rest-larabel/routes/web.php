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

Route::get('/', function () {
     return "<h1>Hi world from laravel </h1>";
});

Route::get('/welcome', function () {
   return view('welcome');
});
/*
Route::get('/pruebas/{nombre?}',function($nombre=null){
    $texto = "<h5><center><b>Pruebas texto</b></center></h5>";
    $texto .= 'Nombre: '.$nombre;
    return view('pruebas',array(
        'texto' => $texto
    ));
});

Route::get('/animales','PruebasController@index');
Route::get('/test-orm','PruebasController@testOrm');
*/

//rutas de prueba para el api
Route::get('/usuario/pruebas','UserController@pruebas');
Route::get('/categoria/pruebas','CategoryController@pruebas');
Route::get('/entradas/pruebas','PostController@pruebas');
//rutas  para el api
Route::post('/api/register','UserController@register');
Route::post('/api/login','UserController@login');