<?php

namespace App\Http\Controllers;

use App\Models\PlanPPP;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PlanInicial extends Controller
{
    public function index()
    {
        $mostrarSweetAlert = false;
        return view('planppp.plan-p-p-p',compact('mostrarSweetAlert'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plan = PlanPPP::all();

        $usuarioTieneRegistro = PlanPPP::where('practicante_id', Auth::id())->exists();

        // Si ya tiene un registro, redirige o muestra un mensaje de error
        if ($usuarioTieneRegistro) {
            Alert::error('Error', 'Ya has creado un registro.')->persistent(true, true);
            return redirect("planppp");
        }
        return view('planppp.form-plan-inicial',compact('plan'));
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
            'modalidad' => 'required',
            'turno' => 'required',
            'archivo' => 'required|file|mimes:pdf,doc,docx',
            'nombre' => 'required',
            'correo' => 'required',
            'numero' => 'required'
        ]);
        $documentoPath = $request->file('archivo')->store('archivos');

        $planppp = new PlanPPP();
        $planppp->plan_inicio = $request->input('inicio');
        $planppp->plan_fin = $request->input('fin');
        $planppp->plan_horas = $request->input('horas');
        $planppp->plan_modalidad = $request->input('modalidad');
        $planppp->plan_turno = $request->input('turno');
        $planppp->plan_archivo = $documentoPath;
        $planppp->plan_super_nombre = $request->input('nombre');
        $planppp->plan_super_correo = $request->input('correo');
        $planppp->plan_super_numero = $request->input('numero');
        $planppp->practicante_id = $request->user()->id;
        $planppp->save();

        Alert::success('¡Guardado!', 'Plan PPP guardado exitosamente!');

        return redirect("planppp");
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
        // Busca el registro del usuario autenticado
        $registro = PlanPPP::where('practicante_id', Auth::id())->first();

        // Verifica si se encontró un registro
        if ($registro) {
            // Pasa el registro a la vista de edición
            return view('planppp.edit', compact('registro'));
        } else {
            // Puedes redirigir o mostrar un mensaje de error si no hay registro
            Alert::error('Error', 'No se encontró un registro para editar.');
            return redirect('planppp');
        }
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
            'modalidad' => 'required',
            'turno' => 'required',
            'archivo' => 'required|file|mimes:pdf,doc,docx',
            'nombre' => 'required',
            'correo' => 'required',
            'numero' => 'required'
        ]);
        $documentoPath = $request->file('archivo')->store('archivos');

        $planppp = PlanPPP::find($id);

        $planppp->plan_inicio = $request->input('inicio');
        $planppp->plan_fin = $request->input('fin');
        $planppp->plan_horas = $request->input('horas');
        $planppp->plan_modalidad = $request->input('modalidad');
        $planppp->plan_turno = $request->input('turno');
        $planppp->plan_archivo = $documentoPath;
        $planppp->plan_super_nombre = $request->input('nombre');
        $planppp->plan_super_correo = $request->input('correo');
        $planppp->plan_super_numero = $request->input('numero');
        $planppp->practicante_id = $request->user()->id;
        $planppp->save();

        Alert::success('¡Guardado!', 'Plan PPP a sido editado exitosamente!');

        return redirect("planppp");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encuentra y elimina el registro que tiene el practicante_id igual a la ID del usuario autenticado
        $registro = PlanPPP::where('practicante_id', Auth::id())->first();

        // Verifica si se encontró un registro antes de intentar eliminar
        if ($registro) {
            $registro->delete();
            // Muestra un mensaje de éxito con SweetAlert
            Alert::success('¡Eliminado!', 'Plan PPP eliminado exitosamente.');
        } else {
            // Muestra un mensaje de error si no se encuentra el registro
            Alert::error('Error', 'No se encontró un registro para eliminar.');
        }

        return redirect('planppp');
    }
}
