<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\RelacionesController;
use App\Http\Controllers\ProductosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', [InicioController::class, 'inicio'])->name('index');
Route::get('/index/productos', [InicioController::class, 'inicioProductos'])->name('index.productos');
Route::post('/index/agradecimiento', [InicioController::class, 'inicioFormulario'])->name('index.agradecimiento');

Route::get('/login/ingreso', [LoginController::class, 'loginIngreso'])->name('login.ingreso');
Route::post('/login/verificar', [LoginController::class, 'loginVerificar'])->name('login.verificar');

// Ruta para productos
Route::resource('/productos', 'App\Http\Controllers\ProductosController');
Route::get('/productos/realizar/busqueda', [ProductosController::class, 'realizarBusqueda'])->name('productos.realizar.busqueda');
Route::post('/productos/verificar/busqueda', [ProductosController::class, 'verificarBusqueda'])->name('productos.verificar.busqueda');
Route::get('/productos/actualizar/estado', [ProductosController::class, 'actualizarEstado'])->name('productos.actualizar.estado');
Route::post('/productos/actualizar/verificar', [ProductosController::class, 'actualizarVerificar'])->name('productos.actualizar.verificar');
Route::get('/productos/{producto}/eliminar', [ProductosController::class, 'eliminar'])->name('productos.eliminar');

// Ruta para sucursales
Route::resource('/sucursales', 'App\Http\Controllers\SucursalesController');
Route::get('/sucursales/realizar/busqueda', [SucursalesController::class, 'realizarBusqueda'])->name('sucursales.realizar.busqueda');
Route::post('/sucursales/verificar/busqueda', [SucursalesController::class, 'verificarBusqueda'])->name('sucursales.verificar.busqueda');
Route::get('/sucursales/{sucursal}/eliminar', [SucursalesController::class, 'eliminar'])->name('sucursales.eliminar');

// Ruta para categorias
Route::resource('/categorias', 'App\Http\Controllers\CategoriasController');
Route::get('/categorias/realizar/busqueda', [CategoriasController::class, 'realizarBusqueda'])->name('categorias.realizar.busqueda');
Route::post('/categorias/verificar/busqueda', [CategoriasController::class, 'verificarBusqueda'])->name('categorias.verificar.busqueda');
Route::get('/categorias/{categoria}/eliminar', [CategoriasController::class, 'eliminar'])->name('categorias.eliminar');

// Ruta relación sucursal & producto
Route::get('/relaciones/producto/sucursal', [RelacionesController::class, 'prodSuc'])->name('relaciones.producto.sucursal');
Route::get('/relaciones/crear/prodSuc', [RelacionesController::class, 'crearProdSuc'])->name('relaciones.crear.prodSuc');
Route::post('/relaciones/verificar/prodSuc', [RelacionesController::class, 'verificarProdSuc'])->name('relaciones.verificar.prodSuc');
Route::get('/relaciones/edit/prodSuc/{producto}/{sucursal}', [RelacionesController::class, 'editProdSuc'])->name('relaciones.edit.prodSuc');
Route::put('/relaciones/update/prodSuc/{producto}/{sucursal}', [RelacionesController::class, 'updateProdSuc'])->name('relaciones.update.prodSuc');
Route::get('/relaciones/eliminar/prodSuc/{producto}/{sucursal}', [RelacionesController::class, 'eliminarProdSuc'])->name('relaciones.eliminar.prodSuc');
Route::delete('/relaciones/destroy/prodSuc/{producto}/{sucursal}', [RelacionesController::class, 'destroyProdSuc'])->name('relaciones.destroy.prodSuc');
Route::get('/relaciones/producto/categoria', [RelacionesController::class, 'prodCat'])->name('relaciones.producto.categoria');
Route::get('/relaciones/crear/prodCat', [RelacionesController::class, 'crearProdCat'])->name('relaciones.crear.prodCat');
Route::get('/relaciones/eliminar/prodCat/{producto}/{categoria}', [RelacionesController::class, 'eliminarProdCat'])->name('relaciones.eliminar.prodCat');
Route::delete('/relaciones/destroy/prodCat/{producto}/{categoria}', [RelacionesController::class, 'destroyProdCat'])->name('relaciones.destroy.prodCat');




