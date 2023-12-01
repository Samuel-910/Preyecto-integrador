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
        Schema::create('convenios', function (Blueprint $table) {
            $table->id();
            $table->string('convenio_tipoConvenio', 50);
            $table->date('convenio_fechaInicio');
            $table->date('convenio_fechaFin');
            $table->string('convenio_estado')->default('En proceso');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreignId('practicante_id')->constrained('practicantes');
            $table->string('convenio_archivo', 300);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convenios');
    }
};
