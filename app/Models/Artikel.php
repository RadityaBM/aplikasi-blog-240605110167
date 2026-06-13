<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'id_kategori',
        'id_penulis',
        'hari_tanggal',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriArtikel::class, 'id_kategori');
    }

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }
}
