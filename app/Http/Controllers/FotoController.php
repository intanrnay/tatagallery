<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;

class FotoController extends Controller
{
    public function upload(Request $request)
{
    // Validate the incoming request data
    // dd($request);
    $request->validate([
        'lokasi_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max file size 2MB
        'judul_foto' => 'required|string|max:255',
        'deskripsi_foto' => 'required|string',
    ]);

    // Check if a file has been uploaded
    if ($request->hasFile('lokasi_file')) {
        // Get the file from the request
        $file = $request->file('lokasi_file');

        // Generate a unique filename for the photo
        $filename = time() . '_' . $file->getClientOriginalName();

        // Move the uploaded file to the storage directory
        $file->move(public_path('storage/foto'), $filename);

        // Create a new instance of the Foto model and save it to the database
        $foto = new Foto();
        $foto->judul_foto = $request->judul_foto;
        $foto->deskripsi_foto = $request->deskripsi_foto;
        $foto->lokasi_file = $filename; // Assign the filename to the 'lokasi_file' attribute
        $foto->save();

        // Return a success response
        return response()->json(['message' => 'Photo uploaded successfully', 'filename' => $filename]);
    }

    // If no file has been uploaded, return an error response
    return response()->json(['message' => 'No photo uploaded'], 400);
}

}