<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Komentar;
use App\Models\Album;

class FotoController extends Controller
{
    public function create ()
    {
        return view('pages.fotoaction.createfoto', [
            "title" => "Create New Post"
        ]);
    }

    public function index ()
    {
        $foto = Foto::all();
        $komentar = Komentar::all();
        $albums = Album::all();
        return view('foto', [
            "title" => "foto",
            "foto" => $foto ,
            "comments" => $komentar,
            "albums" => $albums
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

        return redirect('studio');

    }

    return response()->json(['message' => 'No photo uploaded'], 400);
}
    public function updateAlbum(Request $request, $photoId)
    {
        $request->validate([
            'album_id' => 'required|exists:albums,id',
        ]);

        $foto = Foto::findOrFail($photoId);
        $foto->album_id = $request->album_id;
        $foto->save();

        return redirect()->back()->with('success', 'Photo added to album successfully.');
    }

}
