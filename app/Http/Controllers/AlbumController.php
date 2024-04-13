<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index() {
        return view('pages.albumaction.createalbum', [
            'title' => 'Create Album'
        ]);
    }

    public function store(Request $r)
    {
        $v = $r->validate([
            'user_id' => 'required',
            'nama_album' => 'required|unique:albums',
            'deskripsi' => 'required',
        ]);
Album::create($v);
return redirect('/studio');
    }

}