@extends('layouts.public')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                @if(optional($artikel->kategori)->nama_kategori)
                <li class="breadcrumb-item"><a href="{{ route('kategori.show', $artikel->kategori->id) }}">{{ $artikel->kategori->nama_kategori }}</a></li>
                @endif
                <li class="breadcrumb-item active">{{ Str::limit($artikel->judul, 40) }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-8">
        <div class="article-white-container">
            <span class="badge-kategori mb-3 d-inline-block">{{ optional($artikel->kategori)->nama_kategori ?? 'Tanpa Kategori' }}</span>
            <h1 class="article-title mb-4">{{ $artikel->judul }}</h1>

            <div class="article-meta mb-4">
                @if(optional($artikel->penulis)->foto)
                <img src="{{ asset('storage/foto/' . $artikel->penulis->foto) }}" class="author-avatar">
                @endif
                <div>
                    <div style="font-weight: 600;">{{ optional($artikel->penulis)->nama_depan }} {{ optional($artikel->penulis)->nama_belakang }}</div>
                    <div style="font-size: 0.8rem; color: #64748b;">
                        {{ $artikel->hari_tanggal ?? '-' }}
                    </div>
                </div>
            </div>

            @if($artikel->gambar)
            <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}" class="article-hero-img" alt="{{ $artikel->judul }}">
            @endif

            <div class="article-body">
                {!! $artikel->isi !!}
            </div>

            {{-- Tombol Kembali --}}
            <div class="mt-5 pt-3 border-top">
                <a href="{{ route('home') }}" class="btn-baca" style="background-color: #1e293b;">
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="sidebar-card">
            <div class="sidebar-title">Kategori Artikel</div>
            <div class="mt-3">
                <a href="{{ route('home') }}" class="kategori-link">
                    <span class="left">Semua Artikel</span>
                    <span class="badge-jumlah">{{ isset($kategori) ? $kategori->sum('artikel_count') : 0 }}</span>
                </a>
                @if(isset($kategori) && $kategori->count() > 0)
                @foreach($kategori as $kat)
                <a href="{{ route('kategori.show', $kat->id) }}"
                    class="kategori-link {{ optional($artikel->kategori)->id == $kat->id ? 'aktif' : '' }}">
                    <span class="left">{{ $kat->nama_kategori }}</span>
                    <span class="badge-jumlah">{{ $kat->artikel_count }}</span>
                </a>
                @endforeach
                @else
                <p class="text-muted mt-2" style="font-size: 0.9rem;">Belum ada kategori.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
    .article-white-container {
        background-color: #ffffff !important;
        padding: 40px !important;
        border-radius: 16px !important;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1) !important;
        border: 1px solid #e2e8f0 !important;
    }

    .article-hero-img {
        width: 100% !important;
        height: 350px !important;
        object-fit: cover !important;
        border-radius: 12px !important;
        margin: 20px 0 !important;
        display: block !important;
    }

    .article-body img {
        max-width: 100% !important;
        height: auto !important;
        margin: 20px auto !important;
        display: block !important;
    }
</style>
@endsection