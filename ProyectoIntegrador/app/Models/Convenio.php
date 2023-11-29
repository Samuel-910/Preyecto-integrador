<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function practicante()
    {
        return $this->belongsTo(Practicante::class);
    }
}
