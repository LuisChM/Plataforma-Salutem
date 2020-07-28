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
            'name' => 'admin',
            'email'=> 'admin@g.com',
            'password'=> bcrypt('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'cook',
            'email'=> 'cook@g.com',
            'password'=> bcrypt('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'nutri',
            'email'=> 'nutri@g.com',
            'password'=> bcrypt('123'),
        ]);
    }
}
