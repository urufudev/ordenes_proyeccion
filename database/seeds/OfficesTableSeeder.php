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
            'name'=>'ÁREA DE PERSONAL',
            'description'=>'ÁREA DE PERSONAL',
            'status'=>'ACTIVO'
        ]);

        Office::create([
            'name'=>'DIRECCIÓN DE GESTIÓN PEDAGÓGICA',
            'description'=>'DIRECCIÓN DE GESTIÓN PEDAGÓGICA',
            'status'=>'ACTIVO'
        ]);

        Office::create([
            'name'=>'DIRECCIÓN DE GESTIÓN INSTITUCIONAL',
            'description'=>'DIRECCIÓN DE GESTIÓN INSTITUCIONAL',
            'status'=>'ACTIVO'
        ]);

        Office::create([
            'name'=>'SECRETARÍA GENERAL',
            'description'=>'SECRETARÍA GENERAL',
            'status'=>'ACTIVO'
        ]);

       /*  factory(App\Office::class,20)->create(); */

        
    }
}
