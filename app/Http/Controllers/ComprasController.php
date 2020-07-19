<?php

namespace App\Http\Controllers;

use App\Compras;
use App\Http\Requests\SaveComprasRequest;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compra = Compras::orderBy('created_at', 'ASC')->paginate();
        return view('administracion.compras.index', compact('compra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.compras.create',[
            'compras'=> new Compras
        ]);
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveComprasRequest $request)
    {
        Compras::create($request->validated());
        
        return redirect()->route('compras.index')->with('status','La compra se creo con exito');
    }  
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function show(Compras $compras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function edit(Compras $compras)
    {
        return view('administracion.compras.edit',[
            'compras'=>$compras
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Compras $compras, SaveComprasRequest $request)
    {
        $compras->update($request->validated());
        return redirect()->route('compras.index', $compras)->with('status','El dato fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compras $compras)
    {
        $compras->delete();
        return redirect()->route('compras.index')->with('status','El dato fue eliminado');
    }
}
