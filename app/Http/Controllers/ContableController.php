<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContableController extends Controller
{
    public function index()
    {
        return view('contabilidad.index'); 
    }
}
