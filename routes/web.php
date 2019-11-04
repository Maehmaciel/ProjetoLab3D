<?php

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
    return view('index');
});
Route::get('/galeria', function () {
    return view('galeri');
});
Route::get('/comentarios', function () {
    return view('comentarios');
});
Route::get('/projetos', function () {
    return view('projetos');
});
Route::get('/enviarProjeto', function () {
    return view('enviarProjeto');
});
Route::get('/verProjeto', function () {
    return view('verProjeto');
});
Route::get('/sobre', function () {
    return view('sobre');
});
Route::post('up','ProjetoController@store');
Route::post('update/{id}','ProjetoController@update');
Route::post('upComent','ComentarioController@store');
Route::resource('/comentarios', 'ComentarioController');
Route::resource('/projetos', 'ProjetoController');
Route::get('/ver/{id}', "ProjetoController@show");
Route::get('/apagar/{id}', "ProjetoController@destroy");
Route::get('/editar/{id}', "ProjetoController@edit");
Route::get('/filtro3D', "ProjetoController@filtro3D");
Route::get('/filtroLazer', "ProjetoController@filtroLazer");
