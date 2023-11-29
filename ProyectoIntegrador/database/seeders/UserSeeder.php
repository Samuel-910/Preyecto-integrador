<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name'=>'Jose Samuel Turpo Cauna',
            'email'=>'jose.samuel.c@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Administrador');

        $user=User::create([
            'name'=>'Jenson Chambi',
            'email'=>'jenson.chambi@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Coordinador');

        $user=User::create([
            'name'=>'Juan Perez',
            'email'=>'juan.perez@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $user->assignRole('Estudiante');
        User::factory(10)->create();

    }
}
