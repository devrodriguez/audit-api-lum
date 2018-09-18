<?php

use Illuminate\Database\Seeder;

use App\Enterprise;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Enterprise::truncate();
        factory(Enterprise::class, 10)->create();
    }
}
