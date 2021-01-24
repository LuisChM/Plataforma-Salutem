<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\HojaSeguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SaveLogroPaciente;

class HojaSeguimientoController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
        ]);
        $this->middleware([
            'roles:nutricionista'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(SaveLogroPaciente $request, Paciente $paciente)
    {
        $seg = HojaSeguimiento::create($request->validated());
        $seg->paciente_id = $paciente->id;
        $seg->save();

        return redirect()->route('pacientes.edit', ['paciente' => $paciente])->with('success', 'Logro agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hojaSeguimiento = HojaSeguimiento::findOrFail($id);
        return view('nutricion.hojaSeguimiento.show', [
            'hojaSeguimiento' => $hojaSeguimiento
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HojaSeguimiento  $hojaSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hojaSeguimiento = HojaSeguimiento::find($id);

        return view('nutricion.hojaSeguimiento.edit', compact('hojaSeguimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HojaSeguimiento  $hojaSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function update($id, SaveLogroPaciente $request)
    {

        $actualizarDato=$request->validated();
        HojaSeguimiento::where('id',$id)->update($actualizarDato);
        return back()->with('success', 'Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HojaSeguimiento  $hojaSeguimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(HojaSeguimiento $hojaSeguimiento, $id, Paciente $paciente)
    {
        DB::delete('delete from hoja_seguimientos where id = '.$id);
        dd($paciente);
        $paciente->id;
     return redirect()->route('pacientes.edit', ['paciente' => $paciente])->with('success', 'El rol fue eliminado');
    }
}
