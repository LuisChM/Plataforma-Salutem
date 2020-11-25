<?php

namespace App\Http\Controllers;

use App\HojaSeguimiento;
use Illuminate\Http\Request;
use App\Http\Requests\SaveLogroPaciente;

class HojaSeguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seguimiento = HojaSeguimiento::orderBy('created_at', 'ASC')->paginate();
        return view('pacientes.create', compact('seguimiento'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nutricion.hojaSeguimiento.create', [
            'hojaSeguimiento' => new HojaSeguimiento,
        ]);   
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SaveLogroPaciente  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveLogroPaciente $request)
    {
        $seg = HojaSeguimiento::create($request->validated());
$seg->save();
        return redirect()->route('pacientes.create')->with('success', 'Logro agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hojaSeguimiento  $hojaSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function show(hojaSeguimiento $hojaSeguimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hojaSeguimiento  $hojaSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(hojaSeguimiento $hojaSeguimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hojaSeguimiento  $hojaSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hojaSeguimiento $hojaSeguimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hojaSeguimiento  $hojaSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(hojaSeguimiento $hojaSeguimiento)
    {
        //
    }
}
