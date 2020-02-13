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
        Regime::create([
            'name'=>'DL 19990',
            'description'=>'DL 19990',
            'status'=>'ACTIVO'
        ]);

        factory(Regime::class,20)->create();
    }
}
