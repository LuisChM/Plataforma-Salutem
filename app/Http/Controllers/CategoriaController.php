<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveRolRequest;
use App\Categoria;
use App\Http\Requests\SaveCategoriasRequest;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categoria = Categoria::orderBy('created_at', 'ASC')->paginate();
        return view('administracion.categorias.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.categorias.create', [
            'categoria' => new Categoria
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCategoriasRequest $request)
    {
        Categoria::create($request->validated());

        return redirect()->route('categorias.index')->with('success', 'La categoria se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $Categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $Categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $Categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('administracion.categorias.edit', [
            'categoria' => $categoria
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $Categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Categoria $categoria, SaveCategoriasRequest $request)
    {
        $categoria->update($request->validated());
        return redirect()->route('categorias.index')->with('success', 'La categoria fue actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'La categoria fue eliminada');
    }
}
