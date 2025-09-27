<?php

use App\Http\Controllers\Admin\GuruController as AdminGuruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\Admin\ProfilSekolahController as AdminProfilSekolahController;

Route::get('/', [ProfilSekolahController::class, 'beranda'])->name('beranda');
Route::get('/profil', [ProfilSekolahController::class, 'profil'])->name('profil');
Route::get('/berita', [ProfilSekolahController::class, 'berita'])->name('berita');
Route::get('/galeri', [ProfilSekolahController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [ProfilSekolahController::class, 'kontak'])->name('kontak');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'auth.admin'])->prefix('administrator')->name('admin.')->group(function() {

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('siswa/create', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::post('siswa/edit/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::get('siswa/delete/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

    Route::get('guru', [GuruController::class, 'index'])->name('guru.index');
    Route::get('guru/create', [GuruController::class, 'create'])->name('guru.create');
    Route::post('guru/create', [GuruController::class, 'store'])->name('guru.store');
    Route::get('guru/edit/{id}', [GuruController::class, 'edit'])->name('guru.edit');
    Route::post('guru/edit/{id}', [GuruController::class, 'update'])->name('guru.update');
    Route::get('guru/delete/{id}', [GuruController::class, 'destroy'])->name('guru.delete');

    Route::get('berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('berita/create', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('berita/edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::post('berita/edit/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::get('berita/delete/{id}', [BeritaController::class, 'destroy'])->name('berita.delete');

    Route::get('galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::get('galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('galeri/create', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('galeri/edit/{id}', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::post('galeri/edit/{id}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::get('galeri/delete/{id}', [GaleriController::class, 'destroy'])->name('galeri.delete');

    Route::get('ekskul', [EkskulController::class, 'index'])->name('ekskul.index');
    Route::get('ekskul/create', [EkskulController::class, 'create'])->name('ekskul.create');
    Route::post('ekskul/create', [EkskulController::class, 'store'])->name('ekskul.store');
    Route::get('ekskul/edit/{id}', [EkskulController::class, 'edit'])->name('ekskul.edit');
    Route::post('ekskul/edit/{id}', [EkskulController::class, 'update'])->name('ekskul.update');
    Route::get('ekskul/delete/{id}', [EkskulController::class, 'destroy'])->name('ekskul.delete');

    Route::get('profil-sekolah', [ProfilSekolahController::class, 'index'])->name('profil-sekolah.index');
    Route::get('profil-sekolah/create', [ProfilSekolahController::class, 'create'])->name('profil-sekolah.create');
    Route::post('profil-sekolah/create', [ProfilSekolahController::class, 'store'])->name('profil-sekolah.store');
    Route::get('profil-sekolah/edit/{id}', [ProfilSekolahController::class, 'edit'])->name('profil-sekolah.edit');
    Route::post('profil-sekolah/edit/{id}', [ProfilSekolahController::class, 'update'])->name('profil-sekolah.update');
    Route::get('profil-sekolah/delete/{id}', [ProfilSekolahController::class, 'destroy'])->name('profil-sekolah.delete');
});

Route::middleware(['auth'])->prefix('operator')->name('operator.')->group(function () {
    Route::get('/dashboard', fn () =>
        view('operator.dashboard', ['title' => 'Dashboard Operator'])
    )->name('dashboard');
});
