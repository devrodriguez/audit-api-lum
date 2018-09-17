<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar un role
        DB::table('roles')->insert([
            'title' => 'Master',
            'description' => 'Role de mayor cargo',
        ]);

        // Insertar un role
        DB::table('roles')->insert([
            'title' => 'Senior',
            'description' => 'Role de medio cargo',
        ]);

        // Insertar un role
        DB::table('roles')->insert([
            'title' => 'Junior',
            'description' => 'Role de menor cargo',
        ]);
    }
}
