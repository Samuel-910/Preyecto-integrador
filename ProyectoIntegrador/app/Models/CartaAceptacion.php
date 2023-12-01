<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaAceptacion extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function practicante()
    {
        return $this->belongsTo(Practicante::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Ajusta el nombre del modelo de usuario si es diferente
    }
}
