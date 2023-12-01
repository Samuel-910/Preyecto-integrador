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
        Schema::create('convocatorias', function (Blueprint $table) {
            $table->id();
            $table->string('convocatoria_salario');
            $table->string('convocatoria_titulo', 100);
            $table->string('convocatoria_puesto');
            $table->string('convocatoria_descripcion', 100);
            $table->bigInteger('convocatoria_vacantes')->unsigned();
            $table->tinyInteger('convocatoria_experiencia');
            $table->string('convocatoria_idiomas');
            $table->date('convocatoria_fechaInicio');
            $table->date('convocatoria_fechaFin');
            $table->string('convocatoria_estado')->default('En proceso');
            $table->tinyInteger('convocatoria_forma_aca');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convocatorias');
    }
};
