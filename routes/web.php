<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\OperatorController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/profil', [BerandaController::class, 'profil'])->name('profil');
Route::get('/berita', [BerandaController::class, 'berita'])->name('berita');
Route::get('/galeri', [BerandaController::class, 'galeri'])->name('galeri');
Route::get('/ekstrakurikuler', [BerandaController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('siswa/{id_siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('siswa/{id_siswa}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('siswa/{id_siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

    Route::get('guru', [GuruController::class, 'index'])->name('guru.index');
    Route::get('guru/create', [GuruController::class, 'create'])->name('guru.create');
    Route::post('guru', [GuruController::class, 'store'])->name('guru.store');
    Route::get('guru/{guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
    Route::put('guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
    Route::delete('guru/{guru}', [GuruController::class, 'destroy'])->name('guru.destroy');

    Route::get('berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::post('berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    Route::get('galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::get('galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('galeri/create', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('galeri/edit/{id_galeri}', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('galeri/edit/{id_galeri}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('galeri/delete/{id_galeri}', [GaleriController::class, 'destroy'])->name('galeri.delete');

    Route::get('ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');
    Route::get('ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])->name('ekstrakurikuler.create');
    Route::post('ekstrakurikuler/create', [EkstrakurikulerController::class, 'store'])->name('ekstrakurikuler.store');
    Route::get('ekstrakurikuler/edit/{id}', [EkstrakurikulerController::class, 'edit'])->name('ekstrakurikuler.edit');
    Route::put('ekstrakurikuler/edit/{id}', [EkstrakurikulerController::class, 'update'])->name('ekstrakurikuler.update');
    Route::delete('ekstrakurikuler/delete/{id}', [EkstrakurikulerController::class, 'destroy'])->name('ekstrakurikuler.delete');

    Route::get('profil', [ProfilSekolahController::class, 'index'])->name('profil.index');
    Route::get('profil/create', [ProfilSekolahController::class, 'create'])->name('profil.create');
    Route::post('profil/create', [ProfilSekolahController::class, 'store'])->name('profil.store');
    Route::get('profil/edit/{id}', [ProfilSekolahController::class, 'edit'])->name('profil.edit');
    Route::post('profil/edit/{id}', [ProfilSekolahController::class, 'update'])->name('profil.update');
    Route::get('profil/delete/{id}', [ProfilSekolahController::class, 'destroy'])->name('profil.delete');
});

Route::middleware(['auth'])->prefix('operator')->name('operator.')->group(function() {
    Route::get('/', [OperatorController::class, 'index'])->name('dashboard');

    Route::get('berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('berita', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::post('berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');

    Route::get('galeri', [GaleriController::class, 'index'])->name('galeri.index');
    Route::get('galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('galeri/create', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('galeri/edit/{id_galeri}', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('galeri/edit/{id_galeri}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('galeri/delete/{id_galeri}', [GaleriController::class, 'destroy'])->name('galeri.delete');

    Route::get('ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler.index');
    Route::get('ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])->name('ekstrakurikuler.create');
    Route::post('ekstrakurikuler/create', [EkstrakurikulerController::class, 'store'])->name('ekstrakurikuler.store');
    Route::get('ekstrakurikuler/edit/{id}', [EkstrakurikulerController::class, 'edit'])->name('ekstrakurikuler.edit');
    Route::put('ekstrakurikuler/edit/{id}', [EkstrakurikulerController::class, 'update'])->name('ekstrakurikuler.update');
    Route::delete('ekstrakurikuler/delete/{id}', [EkstrakurikulerController::class, 'destroy'])->name('ekstrakurikuler.delete');

    Route::get('profil', [ProfilSekolahController::class, 'index'])->name('profil.index');
    Route::get('profil/create', [ProfilSekolahController::class, 'create'])->name('profil.create');
    Route::post('profil/create', [ProfilSekolahController::class, 'store'])->name('profil.store');
    Route::get('profil/edit/{id}', [ProfilSekolahController::class, 'edit'])->name('profil.edit');
    Route::post('profil/edit/{id}', [ProfilSekolahController::class, 'update'])->name('profil.update');
    Route::get('profil/delete/{id}', [ProfilSekolahController::class, 'destroy'])->name('profil.delete');
});
