<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practicante extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function evidencias()
    {
        return $this->hasMany(Evidencia::class);
    }

    public function convenios()
    {
        return $this->hasMany(Convenio::class);
    }

    public function planesPPP()
    {
        return $this->hasMany(PlanPPP::class);
    }

    public function cartaAceptacion()
    {
        return $this->hasOne(CartaAceptacion::class);
    }

    public function informesPPP()
    {
        return $this->hasMany(InformePPP::class);
    }

    public function constancias()
    {
        return $this->hasMany(Constancia::class);
    }

    public function cartasPresentacion()
    {
        return $this->hasMany(CartaPresentacion::class);
    }

    public function inscripcionConvocatorias()
    {
        return $this->hasMany(InscripcionConvocatoria::class);
    }
}
