<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Evidencia extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function practicante()
    {
        return $this->belongsTo(Practicante::class);
    }

    public function getArchivoUrlAttribute(): string
    {
        return Storage::disk('evidencias')->url($this->evi_archivo);
    }
}
