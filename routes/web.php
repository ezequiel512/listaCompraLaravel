<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'getHome']);

Route::get('productos', [ProductoController::class, 'getIndex'])->middleware('auth');

Route::get('productos/show/{id}', [ProductoController::class, 'getShow'])->middleware('auth');

Route::get('productos/create', [ProductoController::class, 'getCreate'])->middleware('auth');

Route::get('productos/edit/{id}', [ProductoController::class, 'getEdit'])->middleware('auth');

Route::post('productos/create', [ProductoController::class, 'postCreate'])->middleware('auth');

Route::put('productos/edit/{id}', [ProductoController::class, 'putEdit'])->middleware('auth');

Route::put('/productos/comprar/{id}', [ProductoController::class, 'putComprar'])->middleware('auth');

require __DIR__.'/auth.php';
