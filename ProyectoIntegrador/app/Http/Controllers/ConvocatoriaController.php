<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    public function buscar(Request $request)
{
    $query = Convocatoria::query();

    if ($request->has('titulo')) {
        $query->where('convocatoria_titulo', 'like', '%' . $request->input('titulo') . '%');
    }

    if ($request->has('puesto')) {
        $query->where('convocatoria_puesto', 'like', '%' . $request->input('puesto') . '%');
    }

    if ($request->has('vacantes')) {
        $query->where('convocatoria_vacantes', 'like', '%' . $request->input('vacantes') . '%');
    }

    $convocatorias = $query->get();

    return view('livewire.convocatoria-list', compact('convocatorias'));
}

}
