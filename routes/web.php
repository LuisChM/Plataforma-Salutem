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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//plantillas base
Route::view('iniciarSesion' , 'layouts.iniciarSesion')->name('iniciarSesion');

Route::view('dashboard' , 'layout_dashboard')->name('dashboard');

Route::view('productos' , 'administracion.productos.productos')->name('productos');

Route::resource('factura','FacturaController')->names('facturas');