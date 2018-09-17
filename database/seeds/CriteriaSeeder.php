<?php

use Illuminate\Database\Seeder;

use App\Criteria;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\Criteria::truncate();
        factory(Criteria::class, 15)->create();
    }
}
