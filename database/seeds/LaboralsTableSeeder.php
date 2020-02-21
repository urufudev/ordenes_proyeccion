<?php

use Illuminate\Database\Seeder;
use App\Laboral;
class LaboralsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Laboral::create([
            'name'=>'DL 19990',
            'description'=>'DL 19990',
            'status'=>'ACTIVO'
        ]);

        
    }
}
