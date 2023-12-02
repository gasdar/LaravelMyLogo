<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    
    public function index(){
        $categorias = Categoria::get();
        return view('categorias.listado')->with('categorias', $categorias);
    }

    public function create(){
        return view('categorias.crear');
    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required|min:3|max:50'
        ]);

        $categoria = new Categoria();
        $categoria->Cat_Nombre = $request->nombre;
        $categoria->save();

        $categorias = Categoria::get();

        return view('categorias.listado', ['categorias' => $categorias]);
    }

    public function realizarBusqueda() {
        return view('categorias.realizarBusqueda');
    }

    public function verificarBusqueda(Request $request) {

        $this->validate($request, [
            'codigo' => 'required|integer|min:1',
            'nombre' => 'max:50'
        ]);

        if(empty($request->nombre)){
            $categorias = Categoria::where('Cat_Id', '=', $request->codigo)->get();

            if($categorias->isEmpty()){
                $mensaje = "Categoria no encontrada";
                return redirect()->route('categorias.realizar.busqueda')->withErrors(['errorArreglo' => $mensaje]);
            } else {
                return view('categorias.resultadoBusqueda', ['categorias' => $categorias]);
            }

        } else {
            $categorias = Categoria::where('Cat_Id', '=', $request->codigo)
                            ->where('Cat_Nombre', '=', $request->nombre)
                            ->get();

            if($categorias->isEmpty()){
                $mensaje = "Categoria no encontrada";
                return redirect()->route('categorias.realizar.busqueda')->withErrors(['errorArreglo' => $mensaje]);
            } else {
                return view('categorias.resultadoBusqueda', ['categorias' => $categorias]);
            }
        }

    }

    public function edit($categorias) {
        $categoria = Categoria::find($categorias);
        return view('categorias.editar', ['categoria' => $categoria]);
    }

    public function update($categorias, Request $request) {

        $this->validate($request, [
            'nombre' => 'required|min:3|max:50'
        ]);

        $categoria = Categoria::find($categorias);
        $categoria->Cat_Nombre = $request->nombre;
        $categoria->save();

        return redirect()->route('categorias.index');

    }

    public function eliminar($categorias) {
        $categoria = Categoria::find($categorias);
        return view('categorias.eliminar', ['categoria' => $categoria]);
    }

    public function destroy($categorias) {
        $categoria = Categoria::find($categorias);
        $categoria->prodCat()->delete();
        $categoria->delete();

        return redirect()->route('categorias.index');
    }

}
