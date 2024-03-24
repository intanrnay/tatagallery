<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $guarded = ['fotoid'];
    protected $table = 'foto';
    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'tanggal_unggah',
        'lokasi_file',
    ];

    public function album()
    {
        return $this->belongsToMany(Album::class);
    }

    public function komentarfoto()
    {
        return $this->belongsToMany(Komentar::class);
    }
    
    public function likefoto()
    {
        return $this->hasMany(Like::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}