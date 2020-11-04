<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientePacienteController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $name  = $request->get('name');
        // $email  = $request->get('email');

        // $paciente = User::join('asignar_roles', 'users.id', '=', 'asignar_roles.user_id')
        //     ->join('roles', 'asignar_roles.role_id', '=', 'roles.id')
        //     ->where('roles.nombre', '=', 'paciente')
        //     ->name($name)
        //     ->email($email)
        //     ->paginate();
            
        $paciente = Paciente::orderBy('created_at', 'ASC')->paginate();


        return view('nutricion.pacientes.index', compact('paciente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $paciente = Paciente::find($user_id);
        return view('cliente.show', ['paciente'=>$paciente]);
    }
}
