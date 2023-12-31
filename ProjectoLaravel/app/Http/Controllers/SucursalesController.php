<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;
use App\Models\Producto;

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
                return redirect()->route('sucursales.realizar.busqueda')->withErrors(['errorArreglo' => $mensaje])->withInput();
            } else {
                return view('sucursales.resultadoBusqueda', ['sucursales' => $sucursales]);
            }

        } else {
            $sucursales = Sucursal::where('Suc_Id', '=', $request->codigo)
                            ->where('Suc_Region', '=', $request->region)
                            ->get();

            if($sucursales->isEmpty()){
                $mensaje = "Sucursal no encontrada";
                return redirect()->route('sucursales.realizar.busqueda')->withErrors(['errorArreglo' => $mensaje])->withInput();
            } else {
                return view('sucursales.resultadoBusqueda', ['sucursales' => $sucursales]);
            }
        }

    }

    public function edit($sucursales) {
        $sucursal = Sucursal::find($sucursales);
        return view('sucursales.editar', ['sucursal' => $sucursal]);
    }

    public function update($sucursal, Request $request) {
        
        $this->validate($request, [
            'region' => 'required|min:3|max:50',
            'direccion' => 'required|min:3|max:50'
        ]);

        Sucursal::where('Suc_Id', $sucursal)->update(['Suc_Region' => $request->region, 'Suc_Direccion' => $request->direccion]);

        return redirect()->route('sucursales.index');
    }

    public function eliminar($sucursal){
        $suc = Sucursal::find($sucursal);
        return view('sucursales.eliminar', ['suc' => $suc]);
    }

    public function destroy($sucursal) {
        $suc = Sucursal::find($sucursal);
        $suc->prodSuc()->delete();
        $suc->delete();

        return redirect()->route('sucursales.index');
    }

} // Fin de Clase
