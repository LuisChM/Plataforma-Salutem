<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nombre'=>'administrador',
            'display_nombre'=> 'Administrador',
            'descripcion' => 'Puede ver y manejar todo el sitio'
        ]);
        DB::table('roles')->insert([
            'nombre'=>'nutricionista',
            'display_nombre'=> 'Nutricionista',
            'descripcion' => 'Puede ver y manejar solo nutricion'
        ]);
        DB::table('roles')->insert([
            'nombre'=>'cocinero',
            'display_nombre'=> 'Cocinero',
            'descripcion' => 'Puede ver y manejar solo productos'
        ]);
        DB::table('roles')->insert([
            'nombre'=>'paciente',
            'display_nombre'=> 'Paciente',
            'descripcion' => 'Usuario que utiliza el servicio de nutricion'
        ]);
        DB::table('roles')->insert([
            'nombre'=>'cliente',
            'display_nombre'=> 'Cliente',
            'descripcion' => 'Usuario que consume los productos de alimentacion'
        ]);
    }
}
