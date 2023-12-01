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
        Schema::create('carta_aceptacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('practicante_id')->constrained('practicantes');
            $table->string('acep_archivo', 300);
            $table->string('acep_direccion', 100);
            $table->string('acep_ubigeo', 200);
            $table->string('acep_coordenadas', 300);
            $table->string('acep_estado')->default('En proceso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carta_aceptacions');
    }
};
