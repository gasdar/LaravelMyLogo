<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalesController extends Controller
{
    public function index(){
        $sucursales = Sucursal::get();
        return view('sucursales.listado')->with('sucursales', $sucursales);
    }

    public function create(){
        return view('sucursales.crear');
    }

    public function store(Request $request){

        $this->validate($request, [
            'region' => 'required|min:3|max:50',
            'direccion' => 'required|min:3|max:50'
        ]);

        $sucursal = new Sucursal();
        $sucursal->Suc_Region = $request->region;
        $sucursal->Suc_Direccion = $request->direccion;
        $sucursal->save();

        $sucursales = Sucursal::get();

        return view('sucursales.listado', ['sucursales' => $sucursales]);
    }

    public function realizarBusqueda(){
        return view('sucursales.realizarBusqueda');
    }

    public function verificarBusqueda(Request $request){

        $this->validate($request, [
            'codigo' => 'required|integer|min:1',
            'region' => 'max:50'
        ]);

        if(empty($request->region)){
            $sucursales = Sucursal::where('Suc_Id', '=', $request->codigo)->get();

            if($sucursales->isEmpty()){
                $mensaje = "Sucursal no encontrada";
                return redirect()->route('sucursales.realizar.busqueda')->withErrors(['errorArreglo' => $mensaje]);
            } else {
                return view('sucursales.resultadoBusqueda', ['sucursales' => $sucursales]);
            }

        } else {
            $sucursales = Sucursal::where('Suc_Id', '=', $request->codigo)
                            ->where('Suc_Region', '=', $request->region)
                            ->get();

            if($sucursales->isEmpty()){
                $mensaje = "Sucursal no encontrada";
                return redirect()->route('sucursales.realizar.busqueda')->withErrors(['errorArreglo' => $mensaje]);
            } else {
                return view('sucursales.resultadoBusqueda', ['sucursales' => $sucursales]);
            }
        }

    }


} // Fin de Clase
