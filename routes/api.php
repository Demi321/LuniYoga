<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Environment\Console;
use App\Models\Usuario;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/registroUsuarios",function(Request $request){
    
   
    //$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    $respuesta=array('mensaje'=>'Registro exitoso.');
    $usuario=new Usuario();
    $usuario->nombre=$request->input('nombre');
    $usuario->apellidos=$request->input('apellidos');
    $usuario->usuario=$request->input('usuario');
    $usuario->correo=$request->input('correo');
    $usuario->password=$request->input('password');
    $usuario->telefono=$request->input('telefono');
    $usuario->save();   

    return $respuesta;
});

 

 
 