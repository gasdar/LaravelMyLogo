<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Sucursal;
use App\Models\Prod_Suc;
use App\Models\Estado;

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
            'descripcion' => 'required|min:3|max:200',
            'precio' => 'required|numeric|min:0',
            'estado' => 'required|integer|min:1|max:2'
        ]);

        $producto = new Producto();
        $producto->Prod_Nombre = $request->nombre;
        $producto->Prod_Descripcion = $request->descripcion;
        $producto->Prod_Precio = $request->precio;
        $producto->Prod_Estado = $request->estado;
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
            'nombre' => 'max:50'
        ]);

        if(!empty($request->codigoSuc)){
            if($request->codigoSuc < 1){
                return redirect()->route('productos.realizar.busqueda')->withErrors(['ErrorSucursal' => 'El código de sucursal debe ser mayor a 0'])->withInput();
            }
        }

        if(empty($request->nombre) && empty($request->codigoSuc)){
            $productos = Producto::where('Prod_Id', "=", $request->codigo)->get();

            if($productos->isEmpty()) {
                return redirect()->route('productos.realizar.busqueda')->withErrors(['Error' => 'Producto no encontrado'])->withInput();
            } else {
                return view('productos.resultadoBusqueda', ['productos' => $productos]);
            }

        } else if(empty($request->codigoSuc)) {
            $productos = Producto::where('Prod_Id', $request->codigo)
                                ->where('Prod_Nombre', $request->nombre)
                                ->get();
            if($productos->isEmpty()) {
                return redirect()->route('productos.realizar.busqueda')->withErrors(['Error' => 'Producto no encontrado'])->withInput();
            } else {
                return view('productos.resultadoBusqueda', ['productos' => $productos]);
            }
        } else if(empty($request->nombre)) {
            $prodSuc = Prod_Suc::with(['producto', 'sucursal'])
            ->where('ProdId', $request->codigo)
            ->where('SucId', $request->codigoSuc)
            ->get();

            if($prodSuc->isEmpty()) {
                return redirect()->route('productos.realizar.busqueda')->withErrors(['Error' => 'Producto no encontrado'])->withInput();
            } else {
                return view('productos.resultadoBusqueda2', ['prodSuc' => $prodSuc]);
            }
        } else {
            $prodSuc = Prod_Suc::with(['producto', 'sucursal'])
            ->where('SucId', $request->codigoSuc)
            ->whereHas('producto', function ($query) use ($request) {
                $query->where('Prod_Id', $request->codigo);
                $query->where('Prod_Nombre', $request->nombre);
            })
            ->get();

            if($prodSuc->isEmpty()) {
                return redirect()->route('productos.realizar.busqueda')->withErrors(['Error' => 'Producto no encontrado'])->withInput();
            } else {
                return view('productos.resultadoBusqueda2', ['prodSuc' => $prodSuc]);
            }
        }

    }

    public function edit($productos){
        $producto = Producto::find($productos);

        if($producto) {
            return view("productos.editar", ["producto" => $producto]);
        } else {
            return redirect()->route('productos.index')->withErrors(['NotFound' => 'El producto no fue encontrado']);
        }
        
    }

    public function update($producto, Request $request){

        $this->validate($request, [
            'nombre' => 'required|min:3|max:50',
            'descripcion' => 'required|min:3|max:200',
            'precio' => 'required|numeric|min:0',
            'estado' => 'required|integer|min:0|max:1'
        ]);

        $prod = Producto::find($producto);

        if($prod){
            Producto::where('Prod_Id', $producto)->
            update([ 
                'Prod_Nombre' => $request->nombre,
                'Prod_Descripcion' => $request->descripcion,
                'Prod_Precio'=> $request->precio,
                'Prod_Estado'=> $request->estado
            ]);

            // Se actualizan las relaciones del producto, si su estado a sufrido un cambio.
            RelacionesController::prodActualizar($prod);

            // Se dirige al listado de productos, para ver los posibles cambios
            return redirect()->route('productos.index');
        } else {
            return redirect()->route('productos.index')->withErrors(['NotFound' => 'El producto no fue encontrado']);
        }

    }

    public function eliminar($producto){
        $prod = Producto::find($producto);

        if($prod){
            return view('productos.eliminar', ['prod' => $prod]);
        } else {
            return redirect()->route('productos.index')->withErrors(['NotFound' => 'El producto fue eliminado']);
        }

    }

    // RelacionesController::prodDepuracion($prod);

    public function destroy($producto){
        $prod = Producto::find($producto);

        if($prod) {
            $prod->prodSuc()->delete();
            $prod->prodCat()->delete();
            $prod->delete();
            
            return redirect()->route('productos.index');
        } else {
            return redirect()->route('productos.index')->withErrors(['NotFound' => 'El producto fue eliminado']);
        }
        
    }

    public function actualizarEstado() {
        return view('productos.actualizarEstados');
    }

    public function actualizarVerificar(Request $request) {
        
        $this->validate($request, [
            'codigoSuc' => 'required|integer|min:1',
            'codigoEstado' => 'required|integer|min:1|max:2',
        ]);

        $estado = Estado::where('Estado_Id', $request->codigoEstado)->first();
        $sucursal = Sucursal::where('Suc_Id', $request->codigoSuc)->first();

        if($estado && $sucursal) {

            if($estado->Estado_Nombre == "Deshabilitado") {
                Prod_Suc::where('SucId', $request->codigoSuc)->update(['EstadoId' => $request->codigoEstado, 'Stock' => 0]);
            } else {
                Prod_Suc::where('SucId', $request->codigoSuc)->update(['EstadoId' => $request->codigoEstado, 'Stock' => 5]);
            }

            return redirect()->route('relaciones.producto.sucursal');
        } else {
            return redirect()->route('productos.actualizar.estado')->withErrors(['NoEncontrado' => 'Sucursal o Estado, no encontrado'])->withInput();
        }
        
    }

}
