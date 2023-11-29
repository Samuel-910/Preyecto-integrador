<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inscripcion_convocatorias', function (Blueprint $table) {
            $table->id();
            $table->string('inscripcion_estado', 20)->default('En proceso');
            $table->foreignId('convocatoria_id')->constrained('convocatorias');
            $table->foreignId('practicante_id')->constrained('practicantes');
            $table->string('inscripcion_ganador')->default('En proceso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripcion_convocatorias');
    }
};
