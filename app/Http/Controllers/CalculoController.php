<?php

namespace App\Http\Controllers;

use App\Calculo;
use Illuminate\Http\Request;


class CalculoController extends Controller
{
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
