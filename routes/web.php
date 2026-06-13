<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\KategoriArtikelController;

// 1. Auth Routes
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'proses'])->name('login.proses')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// 2. Redirect /dashboard lama ke /admin/dashboard
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware('auth');

// 3. Public Routes
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/artikel/{id}', [PublicController::class, 'show'])->name('artikel.show');
Route::get('/tentang', [PublicController::class, 'tentang'])->name('tentang');
Route::get('/kategori/{id}', [PublicController::class, 'kategoriShow'])->name('kategori.show');

// 4. Admin/CMS Routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('artikel', ArtikelController::class)->except(['show']);
    Route::resource('penulis', PenulisController::class)->except(['show']);
    Route::resource('kategori', KategoriArtikelController::class)->except(['show']);
});
