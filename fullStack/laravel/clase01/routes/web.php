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
     return view('welcome');
 });

Route::get('home', function(){
  return 'hello word';
});
Route::get('miPrimerRuta', function(){
  return 'Creé mi primer ruta en Larave';
});

Route::get('home/{name}', function($name){ //funcion anonima
  return 'hello '.$name;
});

Route::get('post/{post_id}/comments/{comments_id?}', function($post_id, $comments_id=null){ //funcion anonima
  if ($comments_id!==null) {
    return $comments_id;
  }else {
    return 'no hay comentarios';
  }
});

Route::get('resultado/{numero}/{num2?}', function($numero, $num2=null){ //funcion anonima
  if ($num2==null) {
    if ($numero%2==0) {
      return 'es par';
    }else {
      return 'es impar';
    }
  }else {
    return $numero*$num2;
  }



});

  //Route::get('/saludo/{hola}','SaludoControlador@index');
    Route::get('/saludo/{saludo}','SaludoControlador@index');
    Route::get('/peliculas/{id}','PeliculasController@buscarPeliculaId');
    Route::get('/peliculas/buscar/{nombre}','PeliculasController@buscarPeliculaNombre');
    Route::get('/peliculas','PeliculasController@index');
    Route::get('/actores','ActorController@directory​');
