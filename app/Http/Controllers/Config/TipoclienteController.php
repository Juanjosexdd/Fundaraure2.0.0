<?php

namespace App\Http\Controllers\Config;

use App\Tipocliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TipoclienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:config.tcliente.create')->only(['create', 'store']);
        $this->middleware('can:config.tcliente.index')->only(['index']);
        $this->middleware('can:config.tcliente.edit')->only(['edit', 'update']);
        $this->middleware('can:config.tcliente.show')->only(['show']);
        $this->middleware('can:config.tcliente.destroy')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('config.tcliente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.tcliente.create',[
            'tcliente' => new Tipocliente
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tcliente = Tipocliente::create($request->all());

        return redirect()->route('tcliente.index')
            ->with('success', 'Tipo cliente guardado con éxito.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipocliente  $tipocliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipocliente $tipocliente, $id)
    {
        $tcliente = Tipocliente::find($id);

        return view('config.tcliente.edit', compact('tcliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipocliente  $tipocliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tcliente = Tipocliente::find($id);

        $tcliente->fill($request->all())->save();

        return redirect()->route('tcliente.index')
            ->with('success', 'Tipo cliente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipocliente  $tipocliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tcliente = Tipocliente::find($id)->delete();
        return back()->with('success', 'Tipo cliente eliminado correctamente');
    }
}
