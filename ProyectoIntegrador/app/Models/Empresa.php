<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function convocatorias()
    {
        return $this->hasMany(Convocatoria::class);
    }

    public function convenios()
    {
        return $this->hasMany(Convenio::class);
    }
}
