<?php

namespace App\Http\Controllers;

use App\User;
use App\Paciente;
use App\ClientePaciente;
use App\PlanNutricional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientePacienteController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
        ]);
        $this->middleware([
            'roles:paciente'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show1()
    {
        // $cliente = Paciente::join('users', 'pacientes.user_id', '=', 'users.id')
        //     ->where('pacientes.user_id', '=', Auth::user()->id)
        //     ->where('users.id', '=', Auth::user()->id)
        //     ->first();
        // if ($cliente === null) {
        //     return view('layouts.perfilUsuario', compact('cliente'));
        // } else {
        //     return view('cliente.show1')->with('cliente', $cliente);
        // }
    }

    public function show2()
    {
        $cliente = Paciente::join('plan_nutricionals', 'pacientes.id', '=', 'plan_nutricionals.user_id')
            ->where('pacientes.user_id', '=', Auth::user()->id)
            ->where('plan_nutricionals.id', '>', 0)
            ->select('plan_nutricionals.*')
            ->first();

        if ($cliente === null) {
            return view('layouts.perfilUsuario', compact('cliente'));
        } else {
            return view('cliente.show2')->with('cliente', $cliente);
        }
    }
    // public function show(Project $project)
    // {

    //     return view('projects.show',[
    //         'project'=>$project
    //     ]);
    // }
}
