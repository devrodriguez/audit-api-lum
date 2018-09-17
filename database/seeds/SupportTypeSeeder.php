<?php

use Illuminate\Database\Seeder;

use App\SupportType;

class SupportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SupportType::class, 12)->create();
    }
}
