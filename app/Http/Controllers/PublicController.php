<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;

class PublicController extends Controller
{
    public function index()
    {
        $artikel  = Artikel::orderBy('id', 'desc')->get();
        $kategori = KategoriArtikel::withCount('artikel')->get();
        return view('public.index', compact('artikel', 'kategori'));
    }

    public function kategoriShow($id)
    {
        $kategori_aktif = KategoriArtikel::findOrFail($id);
        $artikel        = Artikel::where('id_kategori', $id)->orderBy('id', 'desc')->get();
        $kategori       = KategoriArtikel::withCount('artikel')->get();
        return view('public.index', compact('artikel', 'kategori', 'kategori_aktif'));
    }

    public function show($id)
    {
        $artikel  = Artikel::findOrFail($id);
        $kategori = KategoriArtikel::withCount('artikel')->get();
        return view('public.show', compact('artikel', 'kategori'));
    }

    public function tentang()
    {
        $kategori = KategoriArtikel::withCount('artikel')->get();
        return view('public.tentang', compact('kategori'));
    }
}
