<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Http\Requests\SaveFacturaRequest;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factura= Factura::orderBy('created_at','ASC')->paginate();
        return view('administracion.facturas.index',compact('factura'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.facturas.create',[
            'factura'=> new Factura
        ]);
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveFacturaRequest $request)
    {
        Factura::create($request->validated());
        // esta es para subir fotos y archivos pero esta sin terminar 
        // if($request->hasFile('imagen')){
        //     $request['imagen']= $request->file('imagen')->store('uploads','public');
        // }
        return redirect()->route('facturas.index')->with('status','La factura se creo con exito');
    }  

    /**
     * Display the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {   
        //
     }
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        return view('administracion.facturas.edit',[
            'factura'=>$factura
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Factura $factura, SaveFacturaRequest $request)
    {
        $factura->update($request->validated());
        return redirect()->route('facturas.index', $factura)->with('status','El proyecto fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        $factura->delete();
        return redirect()->route('facturas.index')->with('status','El proyecto fue eliminado');
    
    }
}
