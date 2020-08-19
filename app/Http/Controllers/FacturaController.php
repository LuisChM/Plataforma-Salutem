<?php

namespace App\Http\Controllers;

use App\Factura;
use App\Http\Requests\SaveFacturaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacturaController extends Controller
{
    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:administrador'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factura = Factura::orderBy('created_at', 'ASC')->paginate();
        return view('administracion.facturas.index', compact('factura'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administracion.facturas.create', [
            'factura' => new Factura
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SaveFacturaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveFacturaRequest $request)
    {
        $factura = (new Factura)->fill($request->validated());
        if ($request->hasFile('imagen')) {
            $factura->imagen = $request->file('imagen')->store('uploads', 'public');
        }
        $factura->save();

        return redirect()->route('facturas.index')->with('success', 'La factura se creo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        return view('administracion.facturas.edit', [
            'factura' => $factura
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\SaveFacturaRequest  $request
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */

    public function update(SaveFacturaRequest $request, $id)
    {
        $datoFactura = $request->validated();

        if ($request->hasFile('imagen')) {
            $factura = Factura::findOrFail($id);
            Storage::delete('public/' . $factura->imagen);
            $datoFactura['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }
        Factura::where('id', '=', $id)->update($datoFactura);

        $factura = Factura::findOrFail($id);

        return redirect()->route('facturas.index')->with('success', 'La factura fue eliminada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        Storage::delete('public/' . $factura->imagen);
        $factura->delete();
        return redirect()->route('facturas.index')->with('success', 'La factura fue eliminada');
    }
}
