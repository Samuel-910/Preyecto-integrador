<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use App\Models\Empresa;
use App\Models\Evidencia;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CrudConvocatoria extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $convocatoria = Convocatoria::all();
        $empresa = Empresa::all();

        return view('livewire.convocatoria-coor', compact('convocatoria', 'empresa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas = Empresa::all();
        return view('livewire.form-convocatoria',compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'empresa' => 'required',
            'salario' => 'required|numeric',
            'titulo' => 'required',
            'puesto' => 'required',
            'descripcion' => 'required',
            'vacantes' => 'required',
            'experiencia' => 'required',
            'idiomas' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'forma_aca' => 'required'
        ]);

        $convocatoria = new Convocatoria();
        $convocatoria->emp_id = $request->input('empresa');
        $convocatoria->convocatoria_salario = $request->input('salario');
        $convocatoria->convocatoria_titulo = $request->input('titulo');
        $convocatoria->convocatoria_puesto = $request->input('puesto');
        $convocatoria->convocatoria_descripcion = $request->input('descripcion');
        $convocatoria->convocatoria_vacantes = $request->input('vacantes');
        $convocatoria->convocatoria_experiencia = $request->input('experiencia');
        $convocatoria->convocatoria_idiomas = $request->input('idiomas');
        $convocatoria->convocatoria_fechaInicio = $request->input('inicio');
        $convocatoria->convocatoria_fechaFin = $request->input('fin');
        $convocatoria->convocatoria_forma_aca = $request->input('forma_aca');
        $convocatoria->save();

        return redirect("convocatoria");
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
        $convocatoria = Convocatoria::find($id);
        $empresas = Empresa::all();

        return view('livewire.form-convocatoria-edit', compact('convocatoria', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'empresa' => 'required',
            'salario' => 'required|numeric',
            'titulo' => 'required',
            'puesto' => 'required',
            'descripcion' => 'required',
            'vacantes' => 'required',
            'experiencia' => 'required',
            'idiomas' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'forma_aca' => 'required'
        ]);

        $convocatoria = Convocatoria::find($id);
        $convocatoria->emp_id = $request->input('empresa');
        $convocatoria->convocatoria_salario = $request->input('salario');
        $convocatoria->convocatoria_titulo = $request->input('titulo');
        $convocatoria->convocatoria_puesto = $request->input('puesto');
        $convocatoria->convocatoria_descripcion = $request->input('descripcion');
        $convocatoria->convocatoria_vacantes = $request->input('vacantes');
        $convocatoria->convocatoria_experiencia = $request->input('experiencia');
        $convocatoria->convocatoria_idiomas = $request->input('idiomas');
        $convocatoria->convocatoria_fechaInicio = $request->input('inicio');
        $convocatoria->convocatoria_fechaFin = $request->input('fin');
        $convocatoria->convocatoria_forma_aca = $request->input('forma_aca');
        $convocatoria->save();
        Alert::success('¡Guardado!', 'Plan PPP a sido editado exitosamente!');
        return redirect("convocatoria");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $convocatoria = Convocatoria::find($id);
        $convocatoria->delete();
        Alert::success('¡Eliminado!', 'Plan PPP eliminado exitosamente.');
        return redirect("convocatoria");
    }
}
