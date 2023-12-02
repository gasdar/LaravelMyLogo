<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prod_Suc;
use App\Models\Prod_Cat;
use App\Models\Sucursal;
use App\Models\Producto;
use App\Models\Categoria;

class RelacionesController extends Controller
{
 
    public function prodSuc(){
        $prodSuc = Prod_Suc::get()->load('sucursal')->load('producto')->load('estado');
        return view('relaciones.productoSucursal', ["prodSuc" => $prodSuc]);
    }

    public function crearProdSuc() {
        return view('relaciones.crearProdSuc');
    }

    public function verificarProdSuc(Request $request) {

        $this->validate($request, [
            'codigoSuc' => 'required|integer|min:1',
            'codigoProd' => 'required|integer|min:1',
            'codigoEstado' => 'required|integer|min:1|max:2',
            'stock' => 'required|integer|min:1'
        ]);

        $sucursal = Sucursal::where('Suc_Id', $request->codigoSuc)->first();
        $producto = Producto::where('Prod_Id', $request->codigoProd)->first();

        if($sucursal && $producto){
            $prodSuc = Prod_Suc::where('SucId', $request->codigoSuc)->where('ProdId', $request->codigoProd)->first();
            if($prodSuc){
                return redirect()->route('relaciones.crear.prodSuc')->withErrors(['Existente' => 'Ya existe el registro.'])->withInput();
            } else{
                $nuevoRegistro = new Prod_Suc();
                $nuevoRegistro->SucId = $request->codigoSuc;
                $nuevoRegistro->ProdId = $request->codigoProd;
                $nuevoRegistro->EstadoId = $request->codigoEstado;
                $nuevoRegistro->Stock = $request->stock;
                $nuevoRegistro->save();

                $prodSuc = Prod_Suc::get()->load('sucursal')->load('producto');
                return view('relaciones.productoSucursal', ["prodSuc" => $prodSuc]);
            }
        } else {
            return redirect()->route('relaciones.crear.prodSuc')->withErrors(['NoEncontrado' => 'Sucursal o Producto, no encontrado.'])->withInput();
        }
        
    }

    public function prodCat() {
        $prodCat = Prod_Cat::get()->load('categoria')->load('producto');
        return view('relaciones.productoCategoria', ['prodCat' => $prodCat]);
    }

    public function crearProdCat() {
        return view('relaciones.crearProdCat');
    }

    public function verificarProdCat(Request $request) {
        
        $this->validate($request, [
            'codigoCat' => 'required|integer|min:1',
            'codigoProd' => 'required|integer|min:1'
        ]);

        $categoria = Categoria::where('Cat_Id', $request->codigoCat)->first();
        $producto = Producto::where('Prod_Id', $request->codigoProd)->first();

        if($categoria && $producto){
            $prodCat = Prod_Cat::where('CatId', $request->codigoCat)->where('ProdId', $request->codigoProd)->first();
            
            if($prodCat) {
                return redirect()->route('relaciones.crear.prodCat')->withErrors(['Registro Existente' => 'Ya existe el registro.'])->withInput();
            } else {
                
                $nuevoRegistro = new Prod_Cat();
                $nuevoRegistro->CatId = $request->codigoCat;
                $nuevoRegistro->ProdId = $request->codigoProd;
                $nuevoRegistro->save();

                $prodCat = Prod_Cat::get()->load('categoria')->load('producto');
                return view('relaciones.productoCategoria')->with('prodCat', $prodCat);
            }
        
        } else {
            return redirect()->route('relaciones.crear.prodCat')->withErrors(['No Encontrado' => 'Categoría o Producto, no encontrado'])->withInput();
        }
    
    }

    public static function prodActualizar(Producto $producto){
        if($producto->Prod_Estado == 0){
            Prod_Suc::where('ProdId', $producto->Prod_Id)->update(['EstadoId' => 2, 'Stock' => 0]);
        } else {
            Prod_Suc::where('ProdId', $producto->Prod_Id)->update(['EstadoId' => 1, 'Stock' => 5]);
        }
    }

    public function eliminarProdCat($producto, $categoria) {
        $prodCat = Prod_Cat::with(['producto', 'categoria'])
        ->where('ProdId', $producto)
        ->where('CatId', $categoria)
        ->first();
        return view('relaciones.eliminarProdCat', ['prodCat' => $prodCat]);
    }

    public function destroyProdCat($producto, $categoria) {
        Prod_Cat::where('ProdId', $producto)->where('CatId', $categoria)->delete();

        return redirect()->route('relaciones.producto.categoria');
    }

    public function editProdSuc($producto, $sucursal) {
        $prodSuc = Prod_Suc::with(['producto', 'sucursal'])->where('ProdId', $producto)->where('SucId', $sucursal)->first();
        return view('relaciones.editarProdSuc', ['prodSuc' => $prodSuc]);
    }

    public function updateProdSuc($producto, $sucursal, Request $request) {

        $this->validate($request, [
            'estado' => 'required|integer|min:1|max:2',
            'stock' => 'required|integer|min:0'
        ]);

        $prodSuc = Prod_Suc::where('ProdId', $producto)->where('SucId', $sucursal)
        ->update([
            'EstadoId' => $request->estado,
            'Stock' => $request->stock
        ]);

        return redirect()->route('relaciones.producto.sucursal');
    }

    public function eliminarProdSuc($producto, $sucursal) {
        $prodSuc = Prod_Suc::with(['producto', 'sucursal', 'estado'])->where('ProdId', $producto)->where('SucId', $sucursal)->first();
        return view('relaciones.eliminarProdSuc', ['prodSuc' => $prodSuc]);
    }

    public function destroyProdSuc($producto, $sucursal) {
        Prod_Suc::where('ProdId', $producto)->where('SucId', $sucursal)->delete();

        return redirect()->route('relaciones.producto.sucursal');
    }

}
