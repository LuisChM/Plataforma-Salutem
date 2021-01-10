<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contabilidad;
use App\Http\Requests\SaveContabilidadRequest;
use Illuminate\Support\Facades\Crypt;

class ContableController extends Controller
{
    public function index()
    {
        $contable = Contabilidad::orderBy('created_at', 'ASC')->paginate();
        return view('contabilidad.index', compact('contable')); 
    }

    public function create()
    {
        return view('contabilidad.create', [
            'contabilidad' => new Contabilidad
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveContabilidadRequest $request)
    {
        Contabilidad::create($request->validated());

        return redirect()->route('contabilidads.index')->with('status', 'Se creo con exito');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Contabilidad 
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {   $decrypt =  Crypt::decrypt($id);
        $contabilidad = Contabilidad::find($decrypt);
        return view('Contabilidad.show', compact('contabilidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contabilidad $contables
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {   $decrypt =  Crypt::decrypt($id);
        $contabilidad = Contabilidad::find($decrypt);
        return view('Contabilidad.edit', compact('contabilidad')
   
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contabilidad  $contables
     * @return \Illuminate\Http\Response
     */
    public function update(Contabilidad $contabilidad, SaveContabilidadRequest $request)
    {
        $contabilidad->update($request->validated());
        return redirect()->route('contabilidads.index', $contabilidad)->with('status', 'El dato fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contabilidad  $contables
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contabilidad $contabilidad)
    {
        $contabilidad->delete();
        return redirect()->route('contabilidads.index')->with('status', 'El dato fue eliminado');
    }
}
