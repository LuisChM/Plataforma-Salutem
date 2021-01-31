<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Http\Requests\SavePlanNutricional;
use App\planNutricional;

class PlanNutricionalController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
        ]);
        $this->middleware([
            'roles:nutricionista,administrador'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = Paciente::join('plan_nutricionals', 'pacientes.id', '=', 'plan_nutricionals.user_id')->orderBy('plan_nutricionals.created_at', 'ASC')->paginate();

        return view('nutricion.planNutricional.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Paciente::all();

        return view('nutricion.planNutricional.create', [
            'planNutricional' => new planNutricional,
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePlanNutricional $request)
    {
        $datos = planNutricional::create($request->validated());
        $user_id = $request->input("user_id");
        $datos->user_id = $user_id;
        $datos->save();

        return redirect()->route('planNutricionals.index')->with('success', 'La consulta se formo con éxito');
    }
    //     /**
    //      * Display the specified resource.
    //      *
    //      * @param  int  $id
    //      * @return \Illuminate\Http\Response
    //  */
    public function show($id)
    {
        $planNutricional = planNutricional::findOrFail($id);
        return view('nutricion.planNutricional.show', ['planNutricional' => $planNutricional]);   
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(planNutricional $planNutricional)
    {
        return view('nutricion.planNutricional.edit', [
            'planNutricional' => $planNutricional,
        ]);
    }

    //     /**
    //      * Update the specified resource in storage.
    //      *
    //      * @param  \Illuminate\Http\Request  $request
    //      * @param  int  $id
    //      * @return \Illuminate\Http\Response
    //      */
    public function update(UpdatePlanNutricional $request, planNutricional $planNutricional)
    {
        $planNutricional->update($request->validated());
        dd($planNutricional);

        return redirect()->route('planNutricionals.index')->with('success', 'La consulta se formo con éxito');
    }

    //     /**
    //      * Remove the specified resource from storage.
    //      *
    //      * @param  int  $id
    //      * @return \Illuminate\Http\Response
    //      */
    public function destroy(PlanNutricional $planNutricional)
    {
        $planNutricional->delete();
        return redirect()->route('planNutricionals.index')->with('success', 'El plan nutricional fue eliminado');

    }
}
