<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'user_id'=> '4',
            'nombre'=> 'Luis',
            'apellido'=> 'Pepe',
            'genero'=> 'hombre',
            'edad'=> '18',
            'correo'=> 'paciente@g.com',
            'telefono'=> '651654812',
        ]);
        DB::table('pacientes')->insert([
            'user_id'=> '5',
            'nombre'=> 'Maria',
            'apellido'=> 'Marin',
            'genero'=> 'mujer',
            'edad'=> '18',
            'correo'=> 'paciente@g.com',
            'telefono'=> '65416512',
        ]);
    }
}
