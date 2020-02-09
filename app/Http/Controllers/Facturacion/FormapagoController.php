<?php

namespace App\Http\Controllers\Facturacion;

use App\Formapago;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormapagoRequest;


class FormapagoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:facturacion.fpago.create')->only(['create', 'store']);
        $this->middleware('can:facturacion.fpago.index')->only(['index']);
        $this->middleware('can:facturacion.fpago.edit')->only(['edit', 'update']);
        $this->middleware('can:facturacion.fpago.show')->only(['show']);
        $this->middleware('can:facturacion.fpago.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('facturacion.fpago.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facturacion.fpago.create',[
            'fpago' => new Formapago
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormapagoRequest $request)
    {
        $fpago = Formapago::create($request->all());

        return redirect()->route('fpago.index')
            ->with('success', 'Formapago guardado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formapago  $fpago
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fpago = Formapago::find($id);

        return view('fpago.show', compact('fpago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formapago  $fpago
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fpago = Formapago::find($id);

        return view('facturacion.fpago.edit', compact('fpago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formapago  $fpago
     * @return \Illuminate\Http\Response
     */
    public function update(FormapagoRequest $request, $id)
    {
        $fpago = Formapago::find($id);

        $fpago->fill($request->all())->save();

        return redirect()->route('fpago.index')
            ->with('success', 'Formapago actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formapago  $fpago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fpago = Formapago::find($id)->delete();
        return back()->with('success', 'Formapago eliminado con éxito');
    }
}
