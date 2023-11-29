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
        //Dashboard
        Permission::create([
            'name'=>'Ver dashboard'
        ]);
        //Clientes
        Permission::create([
            'name'=>'convocatoriapracticante'
        ]);
        Permission::create([
            'name'=>'sede'
        ]);
        Permission::create([
            'name'=>'cartapresentacion'
        ]);
        Permission::create([
            'name'=>'planppp'
        ]);
        //Productos
        Permission::create([
            'name'=>'documentos'
        ]);
        Permission::create([
            'name'=>'convocoor'
        ]);
        Permission::create([
            'name'=>'evidencia'
        ]);
        Permission::create([
            'name'=>'validardoc'
        ]);
    }
}
