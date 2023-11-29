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
        Schema::create('carta_presentacions', function (Blueprint $table) {
            $table->id();
            $table->string('carta_archivo')->nullable();
            $table->tinyInteger('carta_estado');
            $table->foreignId('practicante_id')->constrained('practicantes');
            $table->string('carta_institucion', 100);
            $table->bigInteger('carta_ruc')->unsigned();
            $table->string('carta_representante', 100);
            $table->tinyInteger('carta_fecha');
            $table->string('carta_cargo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carta_presentacions');
    }
};
