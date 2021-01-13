<?php

namespace App\Http\Controllers;

use App\Calculo;
use Illuminate\Http\Request;


class CalculoController extends Controller
{ function __construct()
    {
        $this->middleware([
            'auth',
            'roles:administrador, nutricionista'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('administracion.calculo.index', compact('calculo'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __invoke()
    // {

    //     return Excel::download(new UserExport(), 'Cálculo de dieta UH modificada.xlsx');
    // }
}
