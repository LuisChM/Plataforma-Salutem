<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\SaveUserRequest;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:admin'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('created_at', 'ASC')->paginate();
        return view('administracion.users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        // busca usuario
        $user = User::findOrFail($id);
        //se muestra el nombre del rol
        $roles = Role::pluck('display_nombre','id');
        //retorna la vista
        return view('administracion.users.edit', [
            'user' => $user,
            'roles'=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveUserRequest $request,$id)
    {
        // busca usuario
        $user = User::findOrFail($id);
        //actualiza el usuario
        $user->update($request->all());
        //se utiliza sync para sincronizar roles y evitar duplicacion de roles
        $user->roles()->sync($request->roles);
        //retornamos la vista luego de actualizar
        return redirect()->route('users.index')->with('status', 'El usuario fue actualizado');
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
