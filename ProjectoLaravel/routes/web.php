<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\RelacionesController;

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

// Ruta para sucursales
Route::resource('/sucursales', 'App\Http\Controllers\SucursalesController');
Route::get('/sucursales/realizar/busqueda', [SucursalesController::class, 'realizarBusqueda'])->name('sucursales.realizar.busqueda');
Route::post('/sucursales/verificar/busqueda', [SucursalesController::class, 'verificarBusqueda'])->name('sucursales.verificar.busqueda');

// Ruta para categorias
Route::resource('/categorias', 'App\Http\Controllers\CategoriasController');
Route::get('/categorias/realizar/busqueda', [CategoriasController::class, 'realizarBusqueda'])->name('categorias.realizar.busqueda');
Route::post('/categorias/verificar/busqueda', [CategoriasController::class, 'verificarBusqueda'])->name('categorias.verificar.busqueda');

// Ruta relación sucursal & producto
Route::get('/relaciones/producto/sucursal', [RelacionesController::class, 'prodSuc'])->name('relaciones.producto.sucursal');
Route::get('/relaciones/crear/prodSuc', [RelacionesController::class, 'crearProdSuc'])->name('relaciones.crear.prodSuc');
Route::post('/relaciones/verificar/prodSuc', [RelacionesController::class, 'verificarProdSuc'])->name('relaciones.verificar.prodSuc');
Route::get('/relaciones/producto/categoria', [RelacionesController::class, 'prodCat'])->name('relaciones.producto.categoria');
Route::get('/relaciones/crear/prodCat', [RelacionesController::class, 'crearProdCat'])->name('relaciones.crear.prodCat');
Route::post('/relaciones/verificar/prodCat', [RelacionesController::class, 'verificarProdCat'])->name('relaciones.verificar.prodCat');



