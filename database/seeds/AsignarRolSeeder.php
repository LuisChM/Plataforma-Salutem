<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignarRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignar_roles')->insert([
            'user_id'=> '1',
            'role_id'=> '1'
        ]);
        DB::table('asignar_roles')->insert([
            'user_id'=> '2',
            'role_id'=> '3'
        ]);
        DB::table('asignar_roles')->insert([
            'user_id'=> '3',
            'role_id'=> '2'
        ]);
    }
}
