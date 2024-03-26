<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Carbon;

class AlbumController extends Controller
{
    public function index() {
        return view('pages.albumaction.createalbum', [
            'title' => 'Create Album'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'nama_album' => 'required|unique:albums',
            'deskripsi' => 'required'
        ]);

        $album = Album::create($validatedData);
        
        $tanggal_dibuat = Carbon::now();
        $album->update(['tanggal_dibuat' => $tanggal_dibuat]);

        return back()->with('AlbumError', 'Sorry, you failed');
    }

}