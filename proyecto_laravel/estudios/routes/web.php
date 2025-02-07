<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
Route::get("/main", function () {
    return "<h1>Hola con h1</h1>";
    //return view("main");
});
*/

//usando una función flecha
/*
Route::get("/main", fn()=>"<h1>Hola</h1>");
Route::get('/main', fn() => view('main'));
*/

//Route::view('/main', 'index');

Route::get("/main", [MainController::class, "index"]); // index es la funcion.


Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos/{numero}', function ($num) {
    return view('alumnos', ['numero' => $num]);
})->where('numero', '[0-9]+');

Route::get ('/contacto', function () {
    return view('contacto');
});

Route::get ('/about', function () {
    return view('about');
});

Route::get ('/noticias', function () {
    return view('noticias');
});

/*Route::fallback(function () {
   $msj = request()->getRequestUri();
   return view("<h1>Error 404: <span style='color: red'>$msj</span></h1>");
});*/
