@extends('layouts.public')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0 p-5">
            <h2 class="fw-bold mb-4" style="color: #1e293b;">Tentang Ruang Baca</h2>
            <p class="text-secondary" style="line-height: 1.8; font-size: 1.1rem;">
                Ruang Baca adalah wadah untuk berbagi wawasan, cerita, dan informasi terkini.
                Kami percaya bahwa setiap tulisan yang dibagikan, mulai dari tutorial pemrograman,
                bedah buku, jurnal akademik, hingga tips olahraga, dapat membawa dampak positif
                dan inspirasi bagi pembacanya.
            </p>
            <div class="mt-4">
                <a href="{{ route('home') }}" class="btn btn-primary px-4">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>
@endsection