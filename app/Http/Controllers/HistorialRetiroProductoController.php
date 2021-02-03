<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;

class HistorialRetiroProductoController extends Controller
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
    public function index()
    {
        $historial = Audit::
        join('productos', 'productos.id', '=', 'audits.auditable_id')
            ->where('auditable_type','App\Producto')
            ->where('event','updated')
            ->select('audits.*','productos.*')
            ->get()
            ->paginate(15)
            ;
// dd($historial);
// $producto = P;roducto::all();
        return view('historialRetiro', compact('historial'));
    }}
