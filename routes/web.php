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

Auth::routes(['verify' => true]);

Route::get('home', 'HomeController@index')->name('home')->middleware('verified');
//plantillas base
Route::view('iniciarSesion', 'layouts.iniciarSesion')->name('iniciarSesion')->middleware('verified');

Route::view('dashboard', 'layout_dashboard')->name('dashboard')->middleware('verified');

// Route::resource('productos', 'ProductosController')->names('productos')->middleware('verified');

Route::resource('producto', 'ProductoController')->names('productos')->middleware('verified');

Route::view('agregarproductos', 'administracion.productos.agregarproductos')->name('agregarproductos')->middleware('verified');

Route::view('editarproductos', 'administracion.productos.editarproductos')->name('editarproductos')->middleware('verified');

Route::resource('user', 'UserController')->names('users')->middleware('verified');

Route::resource('compras', 'ComprasController')->names('compras')->middleware('verified');

Route::resource('role', 'RoleController')->names('roles')->middleware('verified');

Route::resource('paciente', 'PacienteController')->names('pacientes')->middleware('verified');

Route::resource('paciente.seguimiento', 'HojaSeguimientoController')->names('pacientes.seguimientos')->middleware('verified');

Route::resource('seguimiento', 'HojaSeguimientoController')->names('seguimientos')->middleware('verified');

Route::resource('ventas', 'VentasController')->names('ventas')->middleware('verified');

Route::resource('estadisticasventas', 'EstadisticasVentasController')->names('estadisticasventas')->middleware('verified');

Route::resource('estadisticascomida', 'EstadisticasComidaController')->names('estadisticascomida')->middleware('verified');

Route::resource('compra', 'VentaController')->names('compra')->middleware('verified');

Route::resource('retirar_producto', 'RetirarProductoController')->names('retirar_producto')->middleware('verified');

Route::view('calculo', 'nutricion.calculo.index')->name('calculo')->middleware('verified');

Route::get('chart', 'LaravelGoogleGrap@Data')->name('chart')->middleware('verified');

Route::resource('cliente', 'ClientePacienteController')->names('clientes')->middleware('verified');

Route::get('/sendemail', 'SendEmailController@index')->middleware('verified');

Route::post('/sendemail/send', 'SendEmailController@send')->name('sendemail.send')->middleware('verified');

Route::get('correo', 'UserController@correos')->name('correos')->middleware('verified')->middleware('verified');

Route::resource('contabilidad', 'ContableController')->names('contabilidads')->middleware('verified');

Route::view('cliente/{cliente}', 'cliente.show1')->middleware('verified');

Route::get('historialRetiros', 'HistorialRetiroProductoController@index')->name('historialRetiros')->middleware('verified');

// Route::get('cliente/progreso/{cliente}',['as'=>'cliente.show1', 'uses'=>'ClientePacienteController@show1'])->middleware('verified');;

Route::get('cliente/planNutricional/{cliente}', ['as' => 'cliente.show2', 'uses' => 'ClientePacienteController@show2'])->middleware('verified');;

Route::resource('planNutricional', 'PlanNutricionalController')->names('planNutricionals')->middleware('verified');
