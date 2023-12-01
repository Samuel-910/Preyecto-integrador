<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        // 1
        Permission::create([
            'name'=>'Ver dashboard'
        ]);
        // 2
        Permission::create([
            'name'=>'convocatoriapracticante'
        ]);
        // 3
        Permission::create([
            'name'=>'sede'
        ]);
        // 4
        Permission::create([
            'name'=>'cartapresentacion'
        ]);
        // 5
        Permission::create([
            'name'=>'planppp'
        ]);
        // 6
        Permission::create([
            'name'=>'documentos'
        ]);
        // 7
        Permission::create([
            'name'=>'convocoor'
        ]);
        // 8
        Permission::create([
            'name'=>'validar'
        ]);
        // 9
        Permission::create([
            'name'=>'validardoc'
        ]);
        // 10
        Permission::create([
            'name'=>'supervicion'
        ]);

        // 11
        Permission::create([
            'name'=>'consolidado'
        ]);
    }
}
