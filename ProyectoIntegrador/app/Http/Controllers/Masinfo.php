<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use App\Models\Empresa;
use App\Models\InscripcionConvocatoria;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Masinfo extends Controller
{
    public function mostrarMasInfo($id)
    {
        $convocatorias = Convocatoria::find($id);
        return view('livewire.masinfo', compact('convocatorias','id'));
    }
}
