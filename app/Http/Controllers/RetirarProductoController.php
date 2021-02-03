<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use OwenIt\Auditing\Facades\Auditor;

class RetirarProductoController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
        ]);
        $this->middleware([
            'roles:cocinero,administrador'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']=Producto::paginate(10);
        return view('administracion.productos.retirarproducto',$datos);
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $producto=Producto::findOrFail($id);

        return view('administracion.productos.retirar_p_f',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Producto $producto)
    {
        $producto = Producto::find($id);
        $cantidad = $producto->cantidad - $request->input('nuevaCantidad');
        $producto->update(['cantidad'=>$cantidad]);

        return redirect('retirar_producto');
    }

}
