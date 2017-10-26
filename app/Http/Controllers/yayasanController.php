<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\yayasan;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class yayasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yayasan = yayasan::all();
        return view('backend.yayasan.index', compact('yayasan'));
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
        $yayasan = yayasan::find($id);
        return view('backend.yayasan.edit', compact('yayasan'));
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
        $yayasan = yayasan::find($id);
        $yayasan->update($request->all());
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
            if ($yayasan->logo) {
                $old_logo = $yayasan->logo;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $yayasan->logo;

                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus / tidak ada
                }
            }

            $yayasan->logo = $filename;
            $yayasan->save();
        }

        if ($request->hasFile('gambar')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename2 = null;
            $uploaded_gambar = $request->file('gambar');

            // Mengambil extension file
            $extension = $uploaded_gambar->getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename2 = md5(time()) . '.' . $extension;

            // Menyimpan gambar ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_gambar->move($destinationPath, $filename2);

            // Hapus gambar lama, jika ada
            if ($yayasan->gambar) {
                $old_gambar = $yayasan->gambar;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $yayasan->gambar;

                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus / tidak ada
                }
            }

            // Ganti field logo dengan logo yang baru
            
            $yayasan->gambar = $filename2;
            $yayasan->save();
        }

        

        session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $yayasan->nama"]);
        return redirect()->route('yayasan.index');
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
