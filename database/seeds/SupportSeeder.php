<?php

use Illuminate\Database\Seeder;

use App\Support;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Support::class, 10)->create();
    }
}
