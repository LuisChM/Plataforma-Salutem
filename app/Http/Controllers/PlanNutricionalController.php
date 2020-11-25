<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Http\Requests\SavePlanNutricional;
use App\PlanNutricional;

class PlanNutricionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = Paciente::join('plan_nutricionals','pacientes.id','=','plan_nutricionals.user_id')->orderBy('plan_nutricionals.created_at', 'ASC')->paginate();

        return view('nutricion.planNutricional.index', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        // $user = DB::table('users')
        // ->join('asignar_roles', 'users.id', '=', 'asignar_roles.user_id')
        // ->join('roles', 'asignar_roles.role_id', '=', 'roles.id')
        // ->where('roles.nombre', '=', 'paciente')
        // ->select('users.*')
        // ->get();

        $user = Paciente::all();
        

    return view('nutricion.planNutricional.create', [
        'planNutricional' => new PlanNutricional,
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
        $datos = PlanNutricional::create($request->validated());
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
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         return view('nutricion.planNutricional.edit', [
//              'id' =>  $id,
//         ]);   
//      }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(SavePlanNutricional $request, PlanNutricional $planNutricional)
//     {
//        $planNutricional->updateOrCreate(['id'=>1],[$request->validated()]);
// $planNutricional->save();
//         return redirect()->route('planNutricionals.index')->with('success', 'La consulta se formo con éxito');
//         } 
        
//     //     public function update(Project $project, SaveProjectRequest $request)
//     // {
//     //      $project->update($request->validated());
//     //      return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado');

//     // }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
}
