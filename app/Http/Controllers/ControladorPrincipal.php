<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
class ControladorPrincipal extends Controller{


    public function saludando(){
        $user=new User;
        $user->name="Eliseo";
        $user->email="david@gmail.com";
        $user->password="Eliseo";
        $user->save();
        return "hola";
    }


}
