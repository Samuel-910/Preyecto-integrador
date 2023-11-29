<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function inscripcionConvocatorias()
    {
        return $this->hasMany(InscripcionConvocatoria::class);
    }
}
