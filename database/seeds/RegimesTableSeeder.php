<?php

use Illuminate\Database\Seeder;
use App\Regime;

class RegimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        factory(Regime::class,20)->create();
    }
}
