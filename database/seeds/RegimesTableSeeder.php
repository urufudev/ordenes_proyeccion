<?php

use Illuminate\Database\Seeder;

class RegimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Regime::class,20)->create();
    }
}
