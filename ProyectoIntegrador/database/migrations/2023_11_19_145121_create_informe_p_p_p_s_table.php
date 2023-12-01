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
        Schema::create('informe_p_p_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('informe_archivo', 300);
            $table->string('informe_estado')->default('En proceso');
            $table->foreignId('practicante_id')->constrained('practicantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informe_p_p_p_s');
    }
};
