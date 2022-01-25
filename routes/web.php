<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ControladorPrincipal;

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
Route::get('/nosotros', function () {
    return view('secciones/nosotros');
});

Route::get('/clases', function () {
    return view('secciones/clases');
});
Route::get('/contacto', function () {
    return view('secciones/contacto');
});
Route::get('/blog', function () {
    return view('secciones/blog');
});
Route::get('/registrarse', function () {
    return view('secciones/registrarse');
});
Route::get('/blog', function () {
    return view('secciones/blog');
});




//Route::get('insertaUsuarios',[ControladorPrincipal::class,"insertaUsuarios"]);
