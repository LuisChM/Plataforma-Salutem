<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//plantillas base
Route::view('iniciarSesion' , 'layouts.iniciarSesion')->name('iniciarSesion');

Route::view('dashboard' , 'plantilla')->name('dashboard');

Route::view('agregar' , 'dashboard.administracion.control_costo_gasto.agregar')->name('agregar');

Route::view('productos' , 'dashboard.administracion.productos.productos')->name('productos');
