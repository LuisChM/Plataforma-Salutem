<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class ClientePacienteController extends Controller
{
       /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('nutricion.pacientes.show',['paciente'=>$paciente]);
    }

}
