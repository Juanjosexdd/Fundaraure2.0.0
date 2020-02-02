<?php

namespace App\Http\Controllers\Config;

use App\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CargoRequest;


class CargoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:config.cargo.create')->only(['create', 'store']);
        $this->middleware('can:config.cargo.index')->only(['index']);
        $this->middleware('can:config.cargo.edit')->only(['edit', 'update']);
        $this->middleware('can:config.cargo.show')->only(['show']);
        $this->middleware('can:config.cargo.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('config.cargo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('config.cargo.create',[
            'cargo' => new Cargo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoRequest $request)
    {
        $cargo = Cargo::create($request->all());

        return redirect()->route('cargo.index')
            ->with('success', 'Cargo guardado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cargo = Cargo::find($id);

        return view('cargo.show', compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargo = Cargo::find($id);

        return view('config.cargo.edit', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(CargoRequest $request, $id)
    {
        $cargo = Cargo::find($id);

        $cargo->fill($request->all())->save();

        return redirect()->route('cargo.index')
            ->with('success', 'Cargo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cargo = Cargo::find($id)->delete();
        return back()->with('success', 'Cargo eliminado con éxito');
    }
}
