<?php

namespace App\Http\Controllers\Facturacion;


use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;

use App\Tipocliente;
use App\Sector;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('facturacion.cliente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tcliente = Tipocliente::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        // return view('cliente.create',[
        //     'cliente' => new Cliente
        // ]);
        $tcliente = Tipocliente::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $sector = Sector::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        return view('facturacion.cliente.create', compact('tcliente','sector'),[
            'clientes' => new Cliente

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $cliente = Cliente::create($request->all());

        return redirect()->route('cliente.index')
            ->with('success', 'Cliente registrado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tcliente = Tipocliente::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        $clientes = Cliente::find($id);

        $sector = Sector::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        return view('facturacion.cliente.edit', compact('clientes','tcliente','sector'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $id)
    {
        $clientes = Cliente::find($id);

        $clientes->fill($request->all())->save();

        return redirect()->route('cliente.index')
            ->with('success', 'Cliente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
