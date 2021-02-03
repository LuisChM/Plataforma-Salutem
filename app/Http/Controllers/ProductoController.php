<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductoRequest;
use App\Http\Requests\UpdateProductosRequest;
use App\Producto;

class ProductoController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
        ]);
        $this->middleware([
            'roles:administrador,cocinero'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::orderBy('created_at', 'ASC')->paginate();
        return view('administracion.productos.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.productos.create', [
            'producto' => new Producto
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProductoRequest $request)
    {
        Producto::create($request->validated());

        return redirect()->route('productos.index')->with('success', 'El producto se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('administracion.productos.edit', [
            'producto' => $producto
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Producto $producto, UpdateProductosRequest $request)
    {
        $producto->update($request->validated());
        return redirect()->route('productos.index')->with('success', 'El producto fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'El producto fue eliminado');
    }
}
