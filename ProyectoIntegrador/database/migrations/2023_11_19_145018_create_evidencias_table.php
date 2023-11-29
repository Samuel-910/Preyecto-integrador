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
        Schema::create('evidencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('practicante_id')->constrained('practicantes');
            $table->date('evi_inicio');
            $table->bigInteger('evi_horas')->unsigned();
            $table->date('evi_fin');
            $table->string('evi_archivo', 300);
            $table->string('evi_descripcion');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidencias');
    }
};
