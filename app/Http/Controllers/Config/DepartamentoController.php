<?php

namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Departamento;
use App\Http\Requests\DepartamentoRequest;
use App\Http\Controllers\Controller;


class DepartamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:config.dpto.create')->only(['create', 'store']);
        $this->middleware('can:config.dpto.index')->only(['index']);
        $this->middleware('can:config.dpto.edit')->only(['edit', 'update']);
        $this->middleware('can:config.dpto.show')->only(['show']);
        $this->middleware('can:config.dpto.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('config.dpto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.dpto.create',[
            'dpto' => new Departamento
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoRequest $request)
    {
        $dpto = Departamento::create($request->all());

        return redirect()->route('dpto.index')
            ->with('success', 'Departamento guardado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dpto = Departamento::find($id);

        return view('config.dpto.show', compact('dpto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dpto = Departamento::find($id);

        return view('config.dpto.edit', compact('dpto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dpto = Departamento::find($id);

        $dpto->fill($request->all())->save();

        return redirect()->route('dpto.index')
            ->with('success', 'Departamento actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dpto = Departamento::find($id)->delete();
        return back()->with('success', 'Departamento eliminado correctamente');
    }
}
