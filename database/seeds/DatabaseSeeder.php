<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(AuditorSeeder::class);
        $this->call(CriteriaSeeder::class);
        $this->call(FindingSeeder::class);
        $this->call(EvidenceSeeder::class);
        $this->call(SupportTypeSeeder::class);
        $this->call(SupportSeeder::class);
    }
}
