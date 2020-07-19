<?php

namespace App\Http\Controllers;

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
    public function index()
    {

        //ruta temporal solo de prueba
        $factura = Factura::orderBy('created_at', 'ASC')->paginate();
        return view('administracion.facturas.index', compact('factura'));
    }
}
