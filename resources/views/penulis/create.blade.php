@extends('layouts.app')

@section('title', 'Tambah Penulis')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="fw-semibold mb-0" style="color: #333333;">Tambah Penulis</h6>
    <a href="{{ route('admin.penulis.index') }}" class="btn btn-sm" style="background-color: #f0f0f0; color: #555555;">Kembali</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-4">
        <form action="{{ route('admin.penulis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="nama_depan" class="form-label fw-semibold" style="font-size: 13px;">
                        Nama Depan <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control @error('nama_depan') is-invalid @enderror"
                        id="nama_depan" name="nama_depan" value="{{ old('nama_depan') }}"
                        placeholder="Masukkan nama depan">
                    @error('nama_depan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6">
                    <label for="nama_belakang" class="form-label fw-semibold" style="font-size: 13px;">
                        Nama Belakang <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control @error('nama_belakang') is-invalid @enderror"
                        id="nama_belakang" name="nama_belakang" value="{{ old('nama_belakang') }}"
                        placeholder="Masukkan nama belakang">
                    @error('nama_belakang')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold" style="font-size: 13px;">
                    Email <span class="text-danger">*</span>
                </label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" name="email" value="{{ old('email') }}"
                    placeholder="Masukkan email">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold" style="font-size: 13px;">
                    Password <span class="text-danger">*</span>
                </label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    id="password" name="password" placeholder="Masukkan password (minimal 8 karakter)">
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label fw-semibold" style="font-size: 13px;">
                    Jenis Kelamin <span class="text-danger">*</span>
                </label>
                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="" disabled {{ old('jenis_kelamin') ? '' : 'selected' }}>Pilih jenis kelamin</option>
                    <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jenis_kelamin')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4">
                <label for="foto" class="form-label fw-semibold" style="font-size: 13px;">Foto Profil</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror"
                    id="foto" name="foto" accept="image/jpg,image/jpeg,image/png">
                <div class="form-text" style="font-size: 12px;">
                    Format: JPG, JPEG, PNG. Maksimal 2 MB.<br>
                    Jika tidak diunggah, foto default akan digunakan sesuai jenis kelamin.
                </div>
                @error('foto')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="d-flex gap-2 justify-content-end">
                <a href="{{ route('admin.penulis.index') }}" class="btn btn-sm" style="background-color: #f0f0f0; color: #555555;">Batal</a>
                <button type="submit" class="btn btn-sm btn-success">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection