<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

use App\Auditor;

class AuditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar un registro
        DB::table('auditors')->insert([
            'name' => 'John',
            'last_name' => 'Rodriguez',
            'email' => 'john@starqsoft.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'role_id' => 1
        ]);

        factory(Auditor::class, 10)->create();
    }
}
