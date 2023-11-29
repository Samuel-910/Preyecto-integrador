<?php

namespace Database\Seeders;

use App\Models\Practicante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Practicante::factory(10)->create();
    }
}
