<?php

use Illuminate\Database\Seeder;
use App\berita;

class beritaSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $berita = new berita();
        $berita ->judul="judul";
        $berita ->konten="konten";
        $berita ->foto="foto.png";
        $berita->save();

    }
}
