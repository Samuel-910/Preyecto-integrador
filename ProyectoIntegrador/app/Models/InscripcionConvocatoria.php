<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscripcionConvocatoria extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class);
    }

    public function practicante()
    {
        return $this->belongsTo(Practicante::class);
    }
}
