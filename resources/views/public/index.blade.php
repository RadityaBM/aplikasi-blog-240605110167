@extends('layouts.public')

@section('content')
<div class="row g-4">

    <div class="col-lg-8" id="artikel-terbaru">
        <h2 class="section-title"><span>Artikel Terbaru</span></h2>

        @if($artikel->isEmpty())
        <div class="alert alert-info border-0 rounded-3">Belum ada artikel yang tersedia.</div>
        @else
        @foreach($artikel as $item)
        <div class="article-card mb-4">
            @if($item->gambar)
            <img src="{{ asset('storage/gambar/' . $item->gambar) }}"
                alt="{{ $item->judul }}"
                style="width: 100%; height: 200px !important; object-fit: cover !important; border-top-left-radius: 16px; border-top-right-radius: 16px;">
            @endif
            <div class="p-4">
                <span class="badge-kategori">{{ optional($item->kategori)->nama_kategori ?? 'Tanpa Kategori' }}</span>
                <h4 class="fw-bold mb-2" style="font-family: 'Merriweather', serif; font-size: 1.2rem; line-height: 1.5;">
                    {{ $item->judul }}
                </h4>
                <p style="color: #64748b; font-size: 0.93rem; line-height: 1.7; margin-bottom: 16px;">
                    {{ Str::limit(strip_tags(str_replace(['<p>', '</p>', '<br>'], ' ', $item->isi)), 150) }}
                </p>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                        @if(optional($item->penulis)->foto)
                        <img src="{{ asset('storage/foto/' . $item->penulis->foto) }}"
                            style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; flex-shrink: 0;"
                            alt="foto penulis">
                        @else
                        <div class="author-initials">
                            {{ strtoupper(substr(optional($item->penulis)->nama_depan ?? 'P', 0, 1)) }}
                        </div>
                        @endif
                        <span style="font-size: 0.88rem; font-weight: 600; color: #374151;">
                            {{ trim((optional($item->penulis)->nama_depan ?? '') . ' ' . (optional($item->penulis)->nama_belakang ?? '')) ?: 'Penulis' }}
                        </span>
                    </div>
                    <a href="{{ route('artikel.show', $item->id) }}" class="btn-baca">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>

    <div class="col-lg-4" id="widget-kategori">
        <div class="sidebar-card">
            <div class="sidebar-title">Kategori Artikel</div>
            <div class="mt-3">
                <a href="{{ route('home') }}" class="kategori-link {{ !isset($kategori_aktif) ? 'aktif' : '' }}">
                    <span class="left">Semua Artikel</span>
                    <span class="badge-jumlah">{{ isset($kategori) ? $kategori->sum('artikel_count') : 0 }}</span>
                </a>
                @if(isset($kategori) && $kategori->count() > 0)
                @foreach($kategori as $kat)
                <a href="{{ route('kategori.show', $kat->id) }}"
                    class="kategori-link {{ isset($kategori_aktif) && $kategori_aktif->id == $kat->id ? 'aktif' : '' }}">
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
@endsection