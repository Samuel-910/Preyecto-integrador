<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practicante>
 */
class PracticanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'practicante_password' => $this->faker->password,
        'practicante_direccion' => $this->faker->address,
        'practicante_nombre' => $this->faker->name,
        'practicante_correo' => $this->faker->email,
        'practicante_celular' => $this->faker->randomNumber(9, true),
        'practicante_sexo' => $this->faker->randomElement([0, 1]), // Assuming 0 for male and 1 for female
        'practicante_ciclo' => $this->faker->numberBetween(1, 8),
        'practicante_codigo' => $this->faker->randomNumber(6, true),
        'practicante_edad' => $this->faker->numberBetween(18, 60),
        'practicante_area' => $this->faker->word,
        'practicante_estado' => $this->faker->randomElement(['activo', 'inactivo']),
        'user_id' =>User::all()->unique()->random()->id,
        ];
    }
}
