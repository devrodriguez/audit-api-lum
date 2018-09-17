<?php

use Illuminate\Database\Seeder;

use App\Evidence;

class EvidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Evidence::class, 10)->create();
    }
}
