<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/productos', [ProductoController::class, 'inProducto'])->name('product-view');

Route::get('/ingreso', [LoginController::class, 'ingresoLogin'])->name('login');

Route::post('/ingreso/verificar', [LoginController::class, 'verificarIngreso'])->name('verificar');

Route::post('/productos/agradecimiento', [FormularioController::class, 'formInicio'])->name('agradecimiento');




