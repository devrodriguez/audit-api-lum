<?php

use Illuminate\Database\Seeder;

use App\Finding;

class FindingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Finding::class, 10)->create();
    }
}
