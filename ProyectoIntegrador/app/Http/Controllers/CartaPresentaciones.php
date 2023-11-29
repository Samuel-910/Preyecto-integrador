<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartaPresentacion;

class CartaPresentaciones extends Controller
{
    public function index()
    {
        return view('livewire.carta-presentacion');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carta = CartaPresentacion::all();
        return view('livewire.form-carta-presentacion',compact('carta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'institucion' => 'required',
            'ruc' => 'required|numeric',
            'representante' => 'required',
            'cargo' => 'required',
            'fecha' => 'required'
        ]);

        $cartapresentacion = new CartaPresentacion();
        $cartapresentacion->carta_institucion = $request->input('institucion');
        $cartapresentacion->carta_ruc = $request->input('ruc');
        $cartapresentacion->carta_representante = $request->input('representante');
        $cartapresentacion->carta_fecha = $request->input('fecha');
        $cartapresentacion->carta_cargo = $request->input('cargo');
        $cartapresentacion->practicante_id = $request->user()->id;
        $cartapresentacion->save();
        return redirect("pdf");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    }
}
