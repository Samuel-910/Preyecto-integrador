<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convocatoria>
 */
class ConvocatoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $puestos = [
            "Ingeniero de Sistemas",
            "Ingeniero de Software",
            "Arquitecto de Sistemas",
            "Ingeniero de Redes",
            "Administrador de Sistemas",
            "Desarrollador de Software",
            "Analista de Sistemas",
            "Especialista en Seguridad de la Información",
            "Consultor de Tecnología",
            "Ingeniero de Pruebas (Testing)",
            "Ingeniero de Automatización",
            "Ingeniero de DevOps",
            "Ingeniero de Infraestructura",
            "Analista de Datos",
            "Ingeniero de Sistemas Embebidos",
            "Ingeniero de Control y Automatización",
            "Ingeniero de Telecomunicaciones",
            "Especialista en Virtualización y Cloud Computing",
            "Ingeniero de Integración de Sistemas",
            "Ingeniero de Ciberseguridad",
        ];

        $salario = $this->faker->randomNumber(5);
        $titulo = $this->faker->jobTitle;
        $puesto = $this->faker->randomElement($puestos);
        $descripcion = $this->faker->text(100);
        $vacantes = $this->faker->randomDigit;
        $experiencia = $this->faker->numberBetween(1, 10);
        $idiomas = $this->faker->languageCode;
        $fechaInicio = $this->faker->date;
        $fechaFin = $this->faker->date;
        $estado = $this->faker->randomElement(['activo', 'inactivo']);
        $formaAca = $this->faker->numberBetween(1, 10);


        return [
            'convocatoria_salario' => $salario,
            'convocatoria_titulo' => $titulo,
            'convocatoria_puesto' => $puesto,
            'convocatoria_descripcion' => $descripcion,
            'convocatoria_vacantes' => $vacantes,
            'convocatoria_experiencia' => $experiencia,
            'convocatoria_idiomas' => $idiomas,
            'convocatoria_fechaInicio' => $fechaInicio,
            'convocatoria_fechaFin' => $fechaFin,
            'convocatoria_estado' => $estado,
            'convocatoria_forma_aca' => $formaAca,
            'emp_id' => Empresa::all()->random()->id,
        ];
    }
}
