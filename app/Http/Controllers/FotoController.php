<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;

class FotoController extends Controller
{
    public function index ()
    {
        return view('pages.fotoaction.createfoto', [
            "title" => "Create New Post"
        ]);
    }
    public function upload(Request $request)
{
    $request->validate([
        'lokasi_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'judul_foto' => 'required|string|max:255',
        'deskripsi_foto' => 'required|string',
        'album_id' => 'nullable','user_id' => 'required'
    ]);

    if ($request->hasFile('lokasi_file')) {
  
        $file = $request->file('lokasi_file');


        $filename = time() . '_' . $file->hashName();

        $file->move(public_path('storage/foto'), $filename);

        $foto = new Foto();
        $foto->judul_foto = $request->judul_foto;
        $foto->user_id = $request->user_id;
        $foto->deskripsi_foto = $request->deskripsi_foto;
        $foto->lokasi_file = $filename;
        $foto->tanggal_unggah = now();
        $foto->save();

        return response()->json(['message' => 'Photo uploaded successfully', 'filename' => $filename]);
    }

    return response()->json(['message' => 'No photo uploaded'], 400);
}

}