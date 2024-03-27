<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index() {
        return view('pages.albumaction.createalbum', [
            'title' => 'createalbum'
        ]);
    }
}