<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\berita;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $berita = berita::all();
        return view('backend.berita.index', compact('berita'));
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
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
        $berita = berita::find($id);
        return view('backend.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $berita = berita::find($id);
        if (!$berita->update($request->all())) return redirect()->back();

     if ($request->hasFile('judul')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename = null;
            $uploaded_judul = $request->file('judul');

            // Mengambil extension file
            $extension = $uploaded_judul>getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

           

            $berita->judul = $filename;
            $berita->save();
        }

       if ($request->hasFile('konten')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename = null;
            $uploaded_konten = $request->file('konten');

            // Mengambil extension file
            $extension = $uploaded_konten>getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;

           

            $berita->konten = $filename;
            $berita->save();
        }


        if ($request->hasFile('foto')) {
            // Mengambil file yang diupload berikut eksistensinya
            $filename2 = null;
            $uploaded_foto = $request->file('foto');

            // Mengambil extension file
            $extension = $uploaded_foto->getClientOriginalExtension();

            // Membuat nama file random berikut extension
            $filename2 = md5(time()) . '.' . $extension;

            // Menyimpan foto ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_foto->move($destinationPath, $filename2);

            // Hapus foto lama, jika ada
            if ($berita->foto) {
                $old_foto = $berita->foto;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $berita->foto;

                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // File sudah dihapus / tidak ada
                }
            }

            // Ganti field logo dengan logo yang baru
            
            $berita->foto = $filename2;
            $berita->save();
        }

        

        session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menyimpan $berita->nama"]);
        return redirect()->route('berita.index');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(berita $berita)
    {
        //
    }
}
