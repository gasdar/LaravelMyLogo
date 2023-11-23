<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio() {
        return view('index.index');
    }

    public function inicioProductos(){
        return view('index.productos');
    }

    public function inicioFormulario(Request $request) {

        $this->validate($request, [
            'nombre' => 'required|min:3',
            'edad' => 'required|integer|min:18|max:90',
            'mensaje' => 'required|min:10|max:50',
            'categoria' => 'required'
        ]);

        $nombre = $request->input('nombre');

        return view('index.agradecimiento')->with('nombre', $nombre);
    }
}
