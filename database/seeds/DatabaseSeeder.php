<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(RegimesTableSeeder::class);
        $this->call(LaboralsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(YearsTableSeeder::class);
    }
}
