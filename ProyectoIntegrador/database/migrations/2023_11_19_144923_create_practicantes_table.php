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
        Schema::create('practicantes', function (Blueprint $table) {
            $table->id();
            $table->string('practicante_password');
            $table->string('practicante_direccion');
            $table->string('practicante_nombre', 50);
            $table->string('practicante_correo', 100);
            $table->bigInteger('practicante_celular')->unsigned();
            $table->tinyInteger('practicante_sexo');
            $table->tinyInteger('practicante_ciclo');
            $table->bigInteger('practicante_codigo')->unsigned();
            $table->integer('practicante_edad');
            $table->string('practicante_area', 50);
            $table->string('practicante_estado', 20);
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practicantes');
    }
};
