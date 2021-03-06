<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth','roles:administrador'
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name  = $request->get('name');

        $user = User::orderBy('created_at', 'ASC')->name($name)->paginate();

        return view('administracion.users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('display_nombre', 'id');

        //se dirige a la vista de crear
        return view('administracion.users.create', [
            'user' => new User,
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = User::create($request->validated());
        $user->password = Hash::make($request->password);
        $user->roles()->attach($request->roles);
        $user->save();

        return redirect()->route('users.index')->with('success', 'El usuario fue agregado');
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
        $roles = Role::pluck('display_nombre', 'id');
        // $roles = $role->except(['Administrador',1]);
        //retorna la vista
        return view('administracion.users.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateUserRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        // busca usuario
        $user = User::findOrFail($id);
        //actualiza el usuario
        $user->update($request->validated());
        //se utiliza sync para sincronizar roles y evitar duplicacion de roles
        $user->roles()->sync($request->roles);
        //retornamos la vista luego de actualizar
        return redirect()->route('users.index')->with('success', 'El usuario fue actualizado');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //se selecciona el user y elimina
        $user->delete();
        //se redirige a la pantalla asignada
        return redirect()->route('users.index')->with('success', 'El usuario fue eliminado');
    }

    public function correos(Request $request)
    {
        $name  = $request->get('name');

        $user = User::orderBy('created_at', 'ASC')->name($name)->paginate();

        return view('correo', compact('user'));
    }
}
