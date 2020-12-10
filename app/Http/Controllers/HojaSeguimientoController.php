<?php

namespace App\Http\Controllers;

use App\HojaSeguimiento;
use Illuminate\Http\Request;
use App\Http\Requests\SaveLogroPaciente;
use App\Paciente;

class HojaSeguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Paciente $paciente)
    {
        $seguimiento = $paciente->seguimiento()->with(['']);

        return view('pacientes.create', compact('seguimiento','paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Paciente $paciente)
    {
        

        return view('nutricion.hojaSeguimiento.create', [
            'hojaSeguimiento' => new HojaSeguimiento,
            'paciente' => $paciente
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SaveLogroPaciente  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveLogroPaciente $request, Paciente $paciente )
    {
        // $paciente = Paciente::all();

        $seg = HojaSeguimiento::create($request->validated());
        $seg->save();
      
        return redirect()->route('pacientes.index',$paciente->id)->with('success', 'Logro agregado con exito');
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
