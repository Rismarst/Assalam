<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnitPendidikan;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UnitPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $unitpendidikan = unitpendidikan::all();
        return view('backend.unitpendidikan.index', compact('unitpendidikan'));
        
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
        $UnitPendidikan = UnitPendidikan::find($id);
        return view('backend.unitpendidikan.edit', compact('UnitPendidikan'));
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
        $UnitPendidikan = UnitPendidikan::find($id);
        if (!$UnitPendidikan->update($request->all())) return redirect()->back();

        // Isi field cover jika ada cover yang diupload
        if ($request->hasFile('logo')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename = null;
            $uploaded_logo = $request->file('logo');

            // Mengambil extension file
            $extension = $uploaded_logo->getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

            // Menyimpan logo ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_logo->move($destinationPath, $filename);

            // Hapus logo lama, jika ada
            if ($UnitPendidikan->logo) {
                $old_logo = $UnitPendidikan->logo;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $UnitPendidikan->logo;

                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus / tidak ada
                }
            }

            $UnitPendidikan->logo = $filename;
            $UnitPendidikan->save();
        }


        if ($request->hasFile('nama_instansi')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename = null;
            $uploaded_visi = $request->file('nama_instansi');

            // Mengambil extension file
            $extension = $uploaded_visi>getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

           

            $profil->nama_instansi = $filename;
            $profil->save();
        }



        if ($request->hasFile('link')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename = null;
            $uploaded_misi = $request->file('link');

            // Mengambil extension file
            $extension = $uploaded_misi>getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

           

            $UnitPendidikan->link = $filename;
            $UnitPendidikan->save();
        }





         



        session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $UnitPendidikan->nama"]);
        return redirect()->route('unitpendidikan.index');
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
