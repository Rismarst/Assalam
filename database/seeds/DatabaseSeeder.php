<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersSeeder::class);

       $this->call(yayasanSeeder::class);
       $this->call(profilSeeder::class);
       $this->call(UnitPendidikanSeeder::class);
       $this->call(beritaSeeeder::class);
    }
}
