<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Http\Requests\SaveCategoriasRequest;
use Illuminate\Http\Request;


class CategoriasController extends Controller
{
    
    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:administrador'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categorias::orderBy('created_at', 'ASC')->paginate();
        return view('administracion.categorias.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.categorias.create',[
            'categorias'=> new Categorias
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
        Categorias::create($request->validated());
        
        return redirect()->route('categorias.index')->with('status','La categoria se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function show(Categorias $categorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorias $categorias)
    {
        return view('administracion.categorias.edit',[
            'categorias'=>$categorias
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Categorias $categorias, SaveCategoriasRequest $request)
    {
        $categorias->update($request->validated());
        return redirect()->route('categorias.index', $categorias)->with('status', 'El proyecto fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorias $categorias)
    {
        $categorias->delete();
        return redirect()->route('categorias.index')->with('status', 'La categoria fue eliminada');
    }
}
