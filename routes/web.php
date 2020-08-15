<?php
use App\Productos;
use Illuminate\Http\Request;
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

// Route::resource('consulta','ConsultaController')->names('consultas')->middleware('verified');

<<<<<<< HEAD
Route::resource('paciente','PacienteController')->names('pacientes')->middleware('verified');

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
Route::resource('paciente','PacienteController')->names('pacientes')->middleware('verified');

=======
>>>>>>> b09839e1e7ca006d6fd9bfde84619120080a64ce
>>>>>>> a1ac7a5419bc6024332ae09d23bd7b6c62ae1958
Route::resource('ventas', 'VentasController')->names('ventas')->middleware('verified');

Route::resource('compra', 'VentaController')->names('compra')->middleware('verified');

<<<<<<< HEAD
Route::resource('retirar_producto', 'RetirarProductoController')->names('retirar_producto')->middleware('verified');
=======
Route::view('calculo' , 'administracion.calculo.index')->name('calculo')->middleware('verified');
<<<<<<< HEAD
=======
>>>>>>> e364e4e0490205c0716765d317afab75a3dc24ba
>>>>>>> b09839e1e7ca006d6fd9bfde84619120080a64ce
>>>>>>> a1ac7a5419bc6024332ae09d23bd7b6c62ae1958
