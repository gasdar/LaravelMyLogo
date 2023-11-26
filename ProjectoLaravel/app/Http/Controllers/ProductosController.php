<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;



class ProductosController extends Controller
{
    
    
    public function index(){
        $productos = Producto::get();
        return view('productos.listado')->with('productos', $productos);
    }
    

    public function create(){

        return view('productos.crear');

    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required|min:3|max:50',
            'descripcion' => 'required|min:3|max:50',
            'precio' => 'required|integer|min:1'
            
        ]);

        $producto = new Producto();
        $producto->Prod_Nombre = $request->nombre;
        $producto->Prod_Descripcion = $request->descripcion;
        $producto->Prod_Precio = $request->precio;
        $producto->save();

        $productos = Producto::get();
        return view('productos.listado')->with('productos', $productos);
    
    }

    public function realizarBusqueda(){
        return view('productos.realizarBusqueda');
        
    }


    public function verificarBusqueda(Request $request){

        $this->validate($request, [
            'codigo' => 'required|integer|min:1',
            'nombre' => 'max:50',
            'codigosuc'=> 'integer|min:1'
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


}
