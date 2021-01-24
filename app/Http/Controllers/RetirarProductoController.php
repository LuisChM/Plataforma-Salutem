<?php

namespace App\Http\Controllers;

use App\Productos;
use App\Retirar_Producto;
use Illuminate\Http\Request;
use App\Http\Controller\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class RetirarProductoController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
        ]);
        $this->middleware([
            'roles:cocinero'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']=Productos::paginate(10);
        return view('administracion.productos.retirarproducto',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProductos=request()->except('_token');
        Productos::insert($datosProductos);
        return redirect('retirar_producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Retirar_Producto  $retirar_Producto
     * @return \Illuminate\Http\Response
     */
    public function show(Retirar_Producto $retirar_Producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Retirar_Producto  $retirar_Producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $producto=Productos::findOrFail($id);

        return view('administracion.productos.retirar_p_f',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Retirar_Producto  $retirar_Producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        DB::table('Productos')
        ->where([['id', $id],['cantidad','>',0]])
        ->update(['cantidad' => DB::raw('cantidad - '.$request->input('nuevaCantidad')), ]);

          return redirect('retirar_producto');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Retirar_Producto  $retirar_Producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retirar_Producto $retirar_Producto)
    {
        //
    }
}
