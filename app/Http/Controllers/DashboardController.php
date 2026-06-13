<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArtikel  = Artikel::count();
        $totalPenulis  = Penulis::count();
        $totalKategori = KategoriArtikel::count();
        $penulis       = Penulis::find(session('penulis_id'));

        $nama_lengkap = $penulis
            ? $penulis->nama_depan . ' ' . $penulis->nama_belakang
            : 'Admin';

        $waktu_login = session('waktu_login') ?? Carbon::now()
            ->timezone('Asia/Jakarta')
            ->locale('id')
            ->isoFormat('dddd, D MMMM Y HH:mm');

        return view('dashboard.index', compact(
            'totalArtikel',
            'totalPenulis',
            'totalKategori',
            'penulis',
            'nama_lengkap',
            'waktu_login'
        ));
    }
}
