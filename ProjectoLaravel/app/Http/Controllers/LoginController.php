<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function ingresoLogin(){
        return view('ingreso');
    }

    public function verificarIngreso(Request $request){
        
        $userDB = "Rolando";
        $passwordDB = "12345";

        $this->validate($request, [
            "u-nombre" => "required",
            "u-contrasena" => "required"
        ]);

        $user = $request->input('u-nombre');
        $password = $request->input('u-contrasena');

        if($userDB == $user && $passwordDB == $password){
            return view('administrador')->with('user', $user);
        } else{
            return redirect()->route('login')->withErrors(['error' => 'Usuario o contraseña incorrecta']);
        }

    }

}
