<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Environment\Console;
use App\Models\Usuario;
use App\Http\Controllers\ControladorPrincipal;
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
    //encriptamos la password
    $respuesta=array('mensaje'=>'Registro exitoso.');

    $usuarioRegistrado = Usuario::select("usuario","correo")->where("usuario",$request->input('usuario'))->get();
    $correoRegistrado=Usuario::select("usuario","correo")->where("correo",$request->input('correo'))->get();

    if(count($usuarioRegistrado)>0 || count($correoRegistrado)>0){        
        $respuesta=array('mensaje'=>'El correo o usuario ingresado ya están registrados.','success'=>false);
    }else{

        $respuesta=array('mensaje'=>'Registro exitoso.','success'=>true);
        $passwordEncriptada=password_hash($request->input('password'), PASSWORD_DEFAULT);   
        $usuario=new Usuario();
        $usuario->nombre=$request->input('nombre');
        $usuario->apellidos=$request->input('apellidos');
        $usuario->usuario=$request->input('usuario');
        $usuario->correo=$request->input('correo');
        $usuario->password=$passwordEncriptada;
        $usuario->telefono=$request->input('telefono');
        $usuario->save();   
    }

    return $respuesta;
});

Route::post("/login",function(Request $request){
        
    $usuario = Usuario::select("usuario","password")->where("usuario",$request->input("usuario"))->get();

    if(count($usuario)===0)
        $usuario=Usuario::select("correo","password")->where("correo",$request->input("usuario"))->get();


    if(count($usuario)===0){
        $respuesta=array('mensaje'=>'El usuario o correo ingresado no se encuentra registrado.','success'=>false);
    }else{
        $passwordRecibida=$request->input("password");
        $hasPasswordUsuario=$usuario[0]["password"];
        $passwordOk=password_verify($passwordRecibida, $hasPasswordUsuario);

        $respuesta=array('mensaje'=>'Login ok.','login'=>$passwordOk,"success"=>true);
        
    }
 
    return $respuesta;

});


 

 
 