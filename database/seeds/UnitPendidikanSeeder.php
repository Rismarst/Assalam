<?php

use Illuminate\Database\Seeder;
use App\UnitPendidikan;
class UnitPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $UnitPendidikan = new UnitPendidikan();
        $UnitPendidikan ->logo="logo.png";
        $UnitPendidikan ->nama_instansi="pg";
        $UnitPendidikan ->link="assalaam";







         $UnitPendidikan->save();

        
















    }
}
