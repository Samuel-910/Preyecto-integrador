<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use App\Models\Empresa;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $convocatoria = Convocatoria::all();
        $empresa = Empresa::all();

        return view('welcome', compact('convocatoria', 'empresa'));
    }
}
