<?php

namespace Database\Seeders;

use App\Models\Practicante;
use Illuminate\Database\Seeder;

class PracticantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Practicante::create([
            'practicante_password' => bcrypt('12345678'),
            'practicante_direccion' => '688 Connelly Lodge Apt. 649 South Estrellaborough, GA 57306-8159',
            'practicante_nombre' => 'Jose Samuel Turpo Cauna',
            'practicante_correo' => 'jose.samuel.c@gmail.com',
            'practicante_celular' => 123456789,
            'practicante_sexo' => 1,
            'practicante_ciclo' => 1,
            'practicante_codigo' => 12345,
            'practicante_edad' => 25,
            'practicante_area' => 'Administrador',
            'practicante_estado' => 'Activo',
            'user_id' => 1,
        ]);
        Practicante::create([
            'practicante_password' => bcrypt('12345678'),
            'practicante_direccion' => '688 Connelly Lodge Apt. 649 South Estrellaborough, GA 57306-8159',
            'practicante_nombre' => 'Jenson Chambi',
            'practicante_correo' => 'jenson.chambi@gmail.com',
            'practicante_celular' => 123456789,
            'practicante_sexo' => 1,
            'practicante_ciclo' => 1,
            'practicante_codigo' => 12345,
            'practicante_edad' => 25,
            'practicante_area' => 'Cordinador',
            'practicante_estado' => 'Activo',
            'user_id' => 2,
        ]);
        $practicante = Practicante::create([
            'practicante_password' => bcrypt('12345678'),
            'practicante_direccion' => '688 Connelly Lodge Apt. 649 South Estrellaborough, GA 57306-8159',
            'practicante_nombre' => 'Juan Perez',
            'practicante_correo' => 'juan.perez@gmail.com',
            'practicante_celular' => 123456789,
            'practicante_sexo' => 1,
            'practicante_ciclo' => 1,
            'practicante_codigo' => 12345,
            'practicante_edad' => 25,
            'practicante_area' => 'Estudiante',
            'practicante_estado' => 'Activo',
            'user_id' => 3,
        ]);
        $practicante = Practicante::create([
            'practicante_password' => bcrypt('12345678'),
            'practicante_direccion' => '688 Connelly Lodge Apt. 649 South Estrellaborough, GA 57306-8159',
            'practicante_nombre' => 'Muel Peña',
            'practicante_correo' => 'manuel@gmail.com',
            'practicante_celular' => 123456789,
            'practicante_sexo' => 1,
            'practicante_ciclo' => 1,
            'practicante_codigo' => 12345,
            'practicante_edad' => 25,
            'practicante_area' => 'Supervisor',
            'practicante_estado' => 'Activo',
            'user_id' => 4,
        ]);
        $practicante = Practicante::create([
            'practicante_password' => bcrypt('12345678'),
            'practicante_direccion' => '688 Connelly Lodge Apt. 649 South Estrellaborough, GA 57306-8159',
            'practicante_nombre' => 'Mericienta',
            'practicante_correo' => 'mercienta@gmail.com',
            'practicante_celular' => 123456789,
            'practicante_sexo' => 1,
            'practicante_ciclo' => 1,
            'practicante_codigo' => 12345,
            'practicante_edad' => 25,
            'practicante_area' => 'Consejo',
            'practicante_estado' => 'Activo',
            'user_id' => 5,
        ]);
    }
}
