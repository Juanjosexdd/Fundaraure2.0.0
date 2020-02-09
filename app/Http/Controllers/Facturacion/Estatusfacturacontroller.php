<?php

namespace App\Http\Controllers\Facturacion;

use App\Estatusfactura;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EstatusfacturaRequest;


class EstatusfacturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:facturacion.efactura.create')->only(['create', 'store']);
        $this->middleware('can:facturacion.efactura.index')->only(['index']);
        $this->middleware('can:facturacion.efactura.edit')->only(['edit', 'update']);
        $this->middleware('can:facturacion.efactura.show')->only(['show']);
        $this->middleware('can:facturacion.efactura.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('facturacion.efactura.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facturacion.efactura.create',[
            'efactura' => new Estatusfactura
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstatusfacturaRequest $request)
    {
        $efactura = Estatusfactura::create($request->all());

        return redirect()->route('efactura.index')
            ->with('success', 'Estatusfactura guardado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estatusfactura  $efactura
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $efactura = Estatusfactura::find($id);

        return view('efactura.show', compact('efactura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estatusfactura  $efactura
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $efactura = Estatusfactura::find($id);

        return view('facturacion.efactura.edit', compact('efactura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estatusfactura  $efactura
     * @return \Illuminate\Http\Response
     */
    public function update(EstatusfacturaRequest $request, $id)
    {
        $efactura = Estatusfactura::find($id);

        $efactura->fill($request->all())->save();

        return redirect()->route('efactura.index')
            ->with('success', 'Estatusfactura actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estatusfactura  $efactura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $efactura = Estatusfactura::find($id)->delete();
        return back()->with('success', 'Estatusfactura eliminado con éxito');
    }
}
