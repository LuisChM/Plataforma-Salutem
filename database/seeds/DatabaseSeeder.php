<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'roles',
            'users'
        ]);
        // $this->call(UserSeeder::class);
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AsignarRolSeeder::class,
        ]);
    }
    protected function truncateTables(array $tables)
    {
        DB::statement('set foreign_key_checks = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('set foreign_key_checks = 1;');
    }
}
