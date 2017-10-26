<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profil;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profil = profil::all();
        return view('backend.profil.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $profil = profil::find($id);
        return view('backend.profil.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $profil = profil::find($id);
        if (!$profil->update($request->all())) return redirect()->back();

        // Isi field cover jika ada cover yang diupload
        if ($request->hasFile('visi')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename = null;
            $uploaded_visi = $request->file('visi');

            // Mengambil extension file
            $extension = $uploaded_visi>getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

           

            $profil->visi = $filename;
            $profil->save();
        }

        if ($request->hasFile('misi')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename = null;
            $uploaded_misi = $request->file('misi');

            // Mengambil extension file
            $extension = $uploaded_misi>getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

           

            $profil->misi = $filename;
            $profil->save();
        }

         if ($request->hasFile('moto')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename = null;
            $uploaded_moto = $request->file('moto');

            // Mengambil extension file
            $extension = $uploaded_moto>getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

           

            $profil->misi = $filename;
            $profil->save();
        }

          if ($request->hasFile('tujuan')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename = null;
            $uploaded_tujuan = $request->file('tujuan');

            // Mengambil extension file
            $extension = $uploaded_tujuan>getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

           

            $profil->tujuan = $filename;
            $profil->save();
        }


session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $profil->nama"]);
        return redirect()->route('profil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
