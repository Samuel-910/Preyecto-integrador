<?php

namespace App\Http\Controllers;

use App\Models\Evidencia;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CrudEvidencia extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evidencias = Evidencia::all();
        return view('evidencias.index', compact('evidencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evidencias.create-evidencia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'inicio' => 'required',
            'fin' => 'required',
            'horas' => 'required',
            'descripcion' => 'required',
            'archivo' => 'required|file|mimes:pdf'
        ]);
        $documentoPath = $request->file('archivo')->store('/', 'evidencias');

        $evidencia = new Evidencia();
        $evidencia->evi_inicio = $request->input('inicio');
        $evidencia->evi_fin = $request->input('fin');
        $evidencia->evi_horas = $request->input('horas');
        $evidencia->evi_descripcion = $request->input('descripcion');
        $evidencia->evi_archivo = $documentoPath;
        $evidencia->practicante_id = $request->user()->id;
        $evidencia->save();
        Alert::success('¡Guardado!', 'Plan PPP guardado exitosamente!');
        return redirect("evidencias");
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
        $evidencia = Evidencia::find($id);
        return view('evidencias.edit-evidencia', compact('evidencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'inicio' => 'required',
            'fin' => 'required',
            'horas' => 'required',
            'descripcion' => 'required',
            'archivo' => 'required|file|mimes:pdf'
        ]);
        $documentoPath = $request->file('archivo')->store('/', 'evidencias');


        $evidencia = Evidencia::find($id);
        $evidencia->evi_inicio = $request->input('inicio');
        $evidencia->evi_fin = $request->input('fin');
        $evidencia->evi_horas = $request->input('horas');
        $evidencia->evi_descripcion = $request->input('descripcion');
        $evidencia->evi_archivo = $documentoPath;
        $evidencia->practicante_id = $request->user()->id;
        $evidencia->save();

        Alert::success('¡Guardado!', 'Plan PPP a sido editado exitosamente!');
        $evidencias = Evidencia::all();
        return view('evidencias.index', compact('evidencias'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $evidencia = Evidencia::find($id);
        $evidencia->delete();
        Alert::success('¡Eliminado!', 'Plan PPP eliminado exitosamente.');
        return redirect("evidencias");
    }
}
