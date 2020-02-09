<?php

namespace App\Http\Controllers\Facturacion;

use App\Servicio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServicioRequest;


class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:facturacion.servicio.create')->only(['create', 'store']);
        $this->middleware('can:facturacion.servicio.index')->only(['index']);
        $this->middleware('can:facturacion.servicio.edit')->only(['edit', 'update']);
        $this->middleware('can:facturacion.servicio.show')->only(['show']);
        $this->middleware('can:facturacion.servicio.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('facturacion.servicio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facturacion.servicio.create',[
            'servicio' => new Servicio
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicioRequest $request)
    {
        $servicio = Servicio::create($request->all());

        return redirect()->route('servicio.index')
            ->with('success', 'Servicio guardado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Servicio::find($id);

        return view('servicio.show', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);

        return view('facturacion.servicio.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(ServicioRequest $request, $id)
    {
        $servicio = Servicio::find($id);

        $servicio->fill($request->all())->save();

        return redirect()->route('servicio.index')
            ->with('success', 'Servicio actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicio::find($id)->delete();
        return back()->with('success', 'Servicio eliminado con éxito');
    }
}
