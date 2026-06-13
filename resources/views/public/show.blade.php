@extends('layouts.public')

@section('content')
<div class="row g-4">

    <div class="col-lg-8">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                @if(optional($artikel->kategori)->nama_kategori)
                <li class="breadcrumb-item">
                    <a href="{{ route('kategori.show', $artikel->kategori->id) }}">{{ $artikel->kategori->nama_kategori }}</a>
                </li>
                @endif
                <li class="breadcrumb-item active">{{ Str::limit($artikel->judul, 40) }}</li>
            </ol>
        </nav>

        <span class="badge-kategori mb-3 d-inline-block">
            {{ optional($artikel->kategori)->nama_kategori ?? 'Tanpa Kategori' }}
        </span>

        <h1 class="article-title">{{ $artikel->judul }}</h1>

        <div class="article-meta">
            @if(optional($artikel->penulis)->foto)
            <img src="{{ asset('storage/foto/' . $artikel->penulis->foto) }}" class="author-avatar" alt="foto penulis">
            @else
            <div class="author-initials">
                {{ strtoupper(substr(optional($artikel->penulis)->nama_depan ?? 'P', 0, 1)) }}
            </div>
            @endif
            <div>
                <div style="font-weight: 600; font-size: 0.92rem; color: #1e293b;">
                    {{ optional($artikel->penulis)->nama_depan . ' ' . optional($artikel->penulis)->nama_belakang }}
                </div>
                <div style="font-size: 0.8rem; color: #64748b;">Penulis</div>
            </div>
        </div>

        @if($artikel->gambar)
        <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}" class="article-hero-img" alt="{{ $artikel->judul }}">
        @endif

        <div class="article-body">{!! $artikel->isi !!}</div>
        
        <div class="mt-5 pt-3 border-top">
            <a href="{{ route('home') }}" class="btn-baca" style="background-color: #1e293b;">← Kembali ke Beranda</a>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="sidebar-card">
            <div class="sidebar-title">Kategori Artikel</div>
            <div class="mt-3">
                <a href="{{ route('home') }}" class="kategori-link">Semua Artikel</a>
                @if(isset($kategori) && $kategori->count() > 0)
                @foreach($kategori as $kat)
                <a href="{{ route('kategori.show', $kat->id) }}" class="kategori-link {{ optional($artikel->kategori)->id == $kat->id ? 'fw-bold' : '' }}">
                    {{ $kat->nama_kategori }}
                </a>
                @endforeach
                @else
                <p class="text-muted mt-2" style="font-size: 0.9rem;">Belum ada kategori.</p>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection