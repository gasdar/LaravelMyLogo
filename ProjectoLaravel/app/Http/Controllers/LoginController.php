<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class LoginController extends Controller
{
    
    public function loginIngreso(){
        return view('login.ingreso');
    }

    public function loginVerificar(Request $request){

        $this->validate($request, [
            "nombre" => "required|max:50",
            "contrasena" => "required|max:50"
        ]);

        $administrador = Administrador::where('Admin_Nombre', $request->nombre)->where('Admin_Password', $request->contrasena)->first();

        if($administrador){
            return view('login.administrador')->with('administrador', $administrador);
        } else{
            return redirect()->route('login.ingreso')->withErrors(['error' => 'Usuario o contraseña incorrecta']);
        }

    }

}
