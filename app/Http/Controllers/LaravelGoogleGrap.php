<?php

namespace App\Http\Controllers;

use App\contabilidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelGoogleGrap extends Controller
{
    public function Data()
    {
       $ingresos = contabilidad::all();
    //    dd($ingresos);
       return view('charts',compact('ingresos'));   
    }
}
