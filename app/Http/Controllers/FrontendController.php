<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\yayasan;
use App\profil;
use App\UnitPendidikan;
use Vinkla\Instagram\Instagram;
class FrontendController extends Controller
{
    public function sejarah(){
    	$sejarah = yayasan::all();
    	return view('frontend.sejarah', compact('sejarah'));
    }

    public function nama_yayasan(){
    	$nama_yayasan = yayasan::all();
    	return view('frontend.home', compact('nama_yayasan'));
    }

    

    public function visimisi(){
    	$visimisi = profil::all();
    	return view('frontend.visimisi', compact('visimisi'));
    }


    public function moto(){
    	$visimisi = profil::all();
    	return view('frontend.moto', compact('visimisi'));
    }


    public function tujuan(){
    	$tujuan = profil::all();
    	return view('frontend.tujuan', compact('tujuan'));
    }


    public function unit_pendidikan(){
        $unit_pendidikan = UnitPendidikan::all();
        return view('frontend.pendidikan', compact('unit_pendidikan'));
    }

    public function galeri(){
        // $response = Instagram::users('sdassalaambdg')->getMedia();
        // $instagrams = $response->get();
        $instagrams = new Instagram();
        $instagrams->get('yayasanassalaambdg');
        dd($instagrams);
        return view('frontend.galeri', compact('instagrams'));
    }
   


}
