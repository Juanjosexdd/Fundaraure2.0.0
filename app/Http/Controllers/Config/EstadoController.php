<?php

namespace App\Http\Controllers\Config;

use App\Estado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EstadoRequest;
use App\Pais;


class EstadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:config.estado.create')->only(['create', 'store']);
        $this->middleware('can:config.estado.index')->only(['index']);
        $this->middleware('can:config.estado.edit')->only(['edit', 'update']);
        $this->middleware('can:config.estado.show')->only(['show']);
        $this->middleware('can:config.estado.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('config.estado.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pais = Pais::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        return view('config.estado.create', compact('pais'),[
            'estado' => new Estado

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoRequest $request)
    {
        $estado = Estado::create($request->all());

        return redirect()->route('estado.index')
            ->with('success', 'Estado guardado con éxito.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pais = Pais::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $estado = Estado::find($id);

        return view('config.estado.edit', compact('estado','pais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoRequest $request, $id)
    {
        $estado = Estado::find($id);

        $estado->fill($request->all())->save();

        return redirect()->route('estado.index')
            ->with('success', 'Estado actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado = Estado::find($id)->delete();
        return back()->with('success', 'Estado eliminado con exito');
    }
}
