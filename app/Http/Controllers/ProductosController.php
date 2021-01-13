<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:administrador, cocinero'
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
        return view('administracion.productos.productos',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('productos.create');
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
        return redirect('productos')->with('success', 'Producto Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $producto=Productos::findOrFail($id);

        return view('administracion.productos.editarproducto',compact('producto'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datosProductos=request()->except(['_token','_method']);
        Productos::where('id','=',$id)->update($datosProductos);
        return redirect('productos')->with('success', 'La consulta se formo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Productos::destroy($id);

        return redirect('productos');
    }
}
