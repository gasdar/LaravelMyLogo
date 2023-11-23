<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function loginIngreso(){
        return view('login.ingreso');
    }

    public function loginVerificar(Request $request){
        
        $userDB = "Rolando";
        $passwordDB = "12345";

        $this->validate($request, [
            "u-nombre" => "required",
            "u-contrasena" => "required"
        ]);

        $user = $request->input('u-nombre');
        $password = $request->input('u-contrasena');

        if($userDB == $user && $passwordDB == $password){
            return view('login.administrador')->with('user', $user);
        } else{
            return redirect()->route('login.ingreso')->withErrors(['error' => 'Usuario o contraseña incorrecta']);
        }

    }

}
