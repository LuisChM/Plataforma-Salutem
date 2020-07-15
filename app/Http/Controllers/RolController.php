<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveRolRequest;
use App\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol= Rol::orderBy('created_at','ASC')->paginate();
        return view('administracion.rols.index',compact('rol'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.rols.create',[
            'rol'=> new Rol
        ]);
    }  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveRolRequest $request)
    {
        Rol::create($request->validated());

        return redirect()->route('rols.index')->with('status','El rol se creo con exito');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Rol $rol)
    {
        return view('administracion.rols.edit',[
            'rol'=>$rol
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Rol $rol, SaveRolRequest $request)
    {
        $rol->update($request->validated());
        return redirect()->route('rols.index', $rol)->with('status','El rol fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();
        return redirect()->route('rols.index')->with('status','El rol fue eliminado');
    
    }
}
