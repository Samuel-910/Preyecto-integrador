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
        Schema::create('plan_p_p_p_s', function (Blueprint $table) {
            $table->id();
            $table->date('plan_inicio');
            $table->date('plan_fin');
            $table->bigInteger('plan_horas')->unsigned();
            $table->tinyInteger('plan_modalidad');
            $table->tinyInteger('plan_turno');
            $table->string('plan_archivo')->nullable();
            $table->string('plan_super_nombre', 100);
            $table->string('plan_super_correo', 100);
            $table->bigInteger('plan_super_numero')->unsigned();
            $table->foreignId('practicante_id')->constrained('practicantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_p_p_p_s');
    }
};
