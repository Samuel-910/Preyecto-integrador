<?php

namespace App\Livewire;

use App\Models\CartaAceptacion;
use App\Models\Constancia;
use App\Models\Convenio;
use App\Models\Empresa;
use App\Models\InformePPP;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Contanscia extends Component
{
    public function render()
    {
        $empresas = Empresa::all();
        $informePPP = CartaAceptacion::where('practicante_id', Auth::id())->first();
        $convenio = Convenio::where('practicante_id', Auth::id())->first();
        return view('livewire.documentos',compact('informePPP','empresas','convenio'));
    }
}
