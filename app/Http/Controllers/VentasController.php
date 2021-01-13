<?php

namespace App\Http\Controllers;

use App\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:administrador, cocinero'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['venta']=Ventas::paginate(10);
        return view('administracion.ventas.ventas',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
       return \view('administracion.ventas.agregarventa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datos_ventas=request()->except('_token');
        Ventas::insert($datos_ventas);
        return redirect('ventas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(Ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ventas=Ventas::findOrFail($id);

        return \view('administracion.ventas.editarventas',compact('ventas'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosventas=request()->except(['_token','_method']);
        Ventas::where('id','=',$id)->update($datosventas);
        return redirect('ventas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ventas::destroy($id);

        return redirect('ventas');
    }

  
}
