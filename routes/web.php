<?php

use App\Http\Controllers\FacturaController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});


Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
//plantillas base
Route::view('iniciarSesion' , 'layouts.iniciarSesion')->name('iniciarSesion')->middleware('verified');

Route::view('dashboard' , 'layout_dashboard')->name('dashboard')->middleware('verified');


Route::resource('productos', 'ProductosController')->names('productos')->middleware('verified');

Route::view('agregarproductos' , 'administracion.productos.agregarproductos')->name('agregarproductos')->middleware('verified');

Route::view('editarproductos' , 'administracion.productos.editarproductos')->name('editarproductos')->middleware('verified');

Route::resource('factura','FacturaController')->names('facturas')->middleware('verified');

Route::resource('user','UserController')->names('users')->middleware('verified');

Route::resource('compras','ComprasController')->names('compras')->middleware('verified');

Route::resource('categorias','CategoriasController')->names('categorias')->middleware('verified');

Route::resource('role','RoleController')->names('roles')->middleware('verified');

Route::resource('consulta','ConsultaController')->names('consultas')->middleware('verified');

