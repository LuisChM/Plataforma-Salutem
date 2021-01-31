<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Priscila',
            'email'=> 'nutricionsalutemcr@gmail.com',
            'password'=> bcrypt('Secret123'),
        ]);
        // DB::table('users')->insert([
        //     'name' => 'cook',
        //     'email'=> 'cook@g.com',
        //     'password'=> bcrypt('123'),
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'nutri',
        //     'email'=> 'nutri@g.com',
        //     'password'=> bcrypt('123'),
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'paciente1',
        //     'email'=> 'paciente1@g.com',
        //     'password'=> bcrypt('123'),
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'paciente2',
        //     'email'=> 'paciente2@g.com',
        //     'password'=> bcrypt('123'),
        // ]);
    }
}
