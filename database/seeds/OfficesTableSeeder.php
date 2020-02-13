<?php

use Illuminate\Database\Seeder;
use App\Office;
class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Office::create([
            'name'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE PERSONAL',
            'description'=>'OFICINA DE ADMINISTRACIÓN/ÁREA DE PERSONAL',
            'status'=>'ACTIVO'
        ]);

        factory(App\Office::class,20)->create();

        
    }
}
