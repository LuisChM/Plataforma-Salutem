<?php

namespace App\Http\Controllers;
use App\Ventas;
use App\EstadisticasComida;
use Illuminate\Http\Request;
use DB;
class EstadisticasComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['venta']=Ventas::paginate(10);
        return view('administracion.ventas.estadisticas',$datos);
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
     * @param  \App\EstadisticasComida  $estadisticasComida
     * @return \Illuminate\Http\Response
     */
    public function show(EstadisticasComida $estadisticasComida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstadisticasComida  $estadisticasComida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ventas=Ventas::findOrFail($id);

        return \view('administracion.ventas.agregar_ventas',compact('ventas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstadisticasComida  $estadisticasComida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('Ventas')
      ->where('id', $id)
      ->update(['cantidad' => DB::raw('cantidad + '.$request->input('nuevaCantidad')), ]);

        return redirect('estadisticascomida');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstadisticasComida  $estadisticasComida
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstadisticasComida $estadisticasComida)
    {
        //
    }
}
