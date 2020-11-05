<?php

namespace App\Http\Controllers;

use App\ClientePaciente;
use App\Factura;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(ClientePaciente $cliente)
    {
        //
        if (auth()->user()->hasRoles(['paciente','cliente'])) {
        return view('layouts.perfilUsuario',compact('cliente'));
        } else {
            return view('bienvenido');
        }
    }
}
