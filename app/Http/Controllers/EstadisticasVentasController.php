<?php

namespace App\Http\Controllers;

use App\EstadisticasVentas;
use Illuminate\Http\Request;
use App\Ventas;
use DB;
class EstadisticasVentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $venta['venta']=Ventas::paginate(100);

        return view('administracion.ventas.estadisticas_ventas',$venta);
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
     * @param  \App\EstadisticasVentas  $estadisticasVentas
     * @return \Illuminate\Http\Response
     */
    public function show(EstadisticasVentas $estadisticasVentas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstadisticasVentas  $estadisticasVentas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ventas=Ventas::findOrFail($id);

        return \view('administracion.ventas.retirar_venta',compact('ventas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstadisticasVentas  $estadisticasVentas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('Ventas')
      ->where('id', $id)
      ->update(['cantidad' => DB::raw('cantidad - '.$request->input('nuevaCantidad')), ]);

        return redirect('estadisticascomida');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstadisticasVentas  $estadisticasVentas
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstadisticasVentas $estadisticasVentas)
    {
        //
    }
}
