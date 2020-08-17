<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveConsultaRequest;
use App\Paciente;
use App\User;
use Illuminate\Http\Request;
// use SweetAlert;

class PacienteController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        
        return view('nutricion.pacientes.create', [
            'paciente' => new Paciente,
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveConsultaRequest $request)
    {
        $user_id = $request->input("user_id");
        $datos = Paciente::create($request->validated());
        $datos->user_id = $user_id;
        $datos->save();

        return redirect()->route('pacientes.index')->with('succes', 'La consulta se formo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
            return view('nutricion.pacientes.edit', [
            'paciente' => $paciente

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(SaveConsultaRequest $request, Paciente $paciente)
    {
    
        $paciente->update($request->validated());
        return redirect()->route('pacientes.index')->with('status', 'Se actualizo el paciente con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
