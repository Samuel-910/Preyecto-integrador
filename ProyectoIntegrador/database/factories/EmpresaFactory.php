<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name=$this->faker->company;
        $correo=$this->faker->companyEmail;
        $numero=$this->faker->randomNumber(9);
        $ruc=$this->faker->unique()->numberBetween(10000000000,99999999999);

        return [
            'emp_nombre' => $name,
            'emp_correo' => $correo,
            'emp_celular' => $numero,
            'emp_ruc' => $ruc,
            'user_id' =>User::all()->unique()->random()->id,
        ];
    }
}
