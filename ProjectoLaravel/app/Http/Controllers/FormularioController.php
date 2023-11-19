<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formInicio(Request $request) {

        $this->validate($request, [
            'nombre' => 'required|min:3',
            'edad' => 'required|integer|min:18|max:90',
            'mensaje' => 'required|min:10|max:50',
            'categoria' => 'required'
        ]);

        $nombre = $request->input('nombre');

        return view('agradecimiento')
        ->with('nombre', $nombre);
    }

}
