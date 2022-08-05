<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('auth.login');
});

Route::resource('articulos','App\Http\Controllers\ArticulosController') ;
Route::resource('/usuarios','App\Http\Controllers\UsuariosController');
Route::resource('/clientes','App\Http\Controllers\ClientesController') ;
Route::resource('/proveedores','App\Http\Controllers\ProveedoresController');
Route::resource('/categorias','App\Http\Controllers\CategoriasController') ;
Route::resource('/cierre','App\Http\Controllers\CierreController');
Route::resource('/productos','App\Http\Controllers\ProductosController') ;
Route::resource('/repClientes','App\Http\Controllers\RepclientesController') ;
Route::resource('/repCompras','App\Http\Controllers\RepcomprasController') ;
Route::resource('/repUsuarios','App\Http\Controllers\RepusuariosController') ;
Route::resource('/repProveedores','App\Http\Controllers\RepproveedoresController') ;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
