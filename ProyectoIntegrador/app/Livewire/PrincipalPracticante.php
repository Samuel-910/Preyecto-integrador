<?php

namespace App\Livewire;

use App\Models\Convocatoria;
use App\Models\Empresa;
use Livewire\Component;

class PrincipalPracticante extends Component
{
    public function render()
    {
        $convocatoria = Convocatoria::all();
        $empresa = Empresa::all();

        return view('livewire.principal-practicante', compact('convocatoria', 'empresa'));
    }
}
