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

//REGRESA UN MENSAJE EN PANTALLA CON METODO GET
Route::get('/hola-mundo', function() {
	return 'Hola mundo!! soy mike ';
});

//REGRESA UN MENSAJE EN PANTALLA CON METODO POST
Route::post('/hola-mundo', function() {
	return 'Hola mundo!! soy mike WEB por post';
});

//REGRESA LA PAGINA CONTACTO EN PANTALLA CON METODO GET
//Route::get('/contacto', function () {
//   return view('contacto');
// });

//FUNCIONA CON VARIOS METODOS 
//Route::match(['get','post'],'contacto', function() {
//	return view('contacto');
//});

//FUNCIONA CON CUALQUIER METODO METODOS 
//Route::any('contacto', function() {
//	return view('contacto');
//});

//PASAR UN PARAMETRO A URL si quiero que sea opcional el envio de la variable se le agrega 
// un signo de ?  y un valor por defecto 
Route::get('/contacto/{nombre?}', function ($nombre = "Mike") {
    return view('contacto',array(
    	"nombre"=> $nombre
    ));
 });
//modificado