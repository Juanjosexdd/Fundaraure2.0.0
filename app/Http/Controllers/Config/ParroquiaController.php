<?php

namespace App\Http\Controllers\Config;

use App\Parroquia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ParroquiaRequest;
use App\Municipio;


class ParroquiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:config.parroquia.create')->only(['create', 'store']);
        $this->middleware('can:config.parroquia.index')->only(['index']);
        $this->middleware('can:config.parroquia.edit')->only(['edit', 'update']);
        $this->middleware('can:config.parroquia.show')->only(['show']);
        $this->middleware('can:config.parroquia.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('config.parroquia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipio = Municipio::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        return view('config.parroquia.create', compact('municipio'),[
            'parroquia' => new Parroquia

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParroquiaRequest $request)
    {
        $parroquia = Parroquia::create($request->all());

        return redirect()->route('parroquia.index')
            ->with('success', 'Parroquia guardado con éxito.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parroquia  $parroquia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipio = Municipio::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $parroquia = Parroquia::find($id);

        return view('config.parroquia.edit', compact('parroquia','municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parroquia  $parroquia
     * @return \Illuminate\Http\Response
     */
    public function update(ParroquiaRequest $request, $id)
    {
        $parroquia = Parroquia::find($id);

        $parroquia->fill($request->all())->save();

        return redirect()->route('parroquia.index')
            ->with('success', 'Parroquia actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parroquia  $parroquia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parroquia = Parroquia::find($id)->delete();
        return back()->with('success', 'Parroquia eliminado con exito');
    }
}
