<?php

use Illuminate\Support\Facades\Route;

// ==================== CONTROLLERS ====================

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BeritaController;


// =====================================================
// BERANDA
// =====================================================

Route::view('/', 'Home')->name('home');


// =====================================================
// PROFIL
// =====================================================

Route::get('/berita', [BeritaController::class, 'index'])
    ->name('berita');

// =====================================================
// PROFIL
// =====================================================

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil');


// =====================================================
// JURUSAN
// =====================================================

Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan');

Route::get('/jurusan/create', [JurusanController::class, 'create'])
    ->name('jurusan.create');

Route::post('/jurusan', [JurusanController::class, 'store'])
    ->name('jurusan.store');

Route::get('/jurusan/{jurusan}', [JurusanController::class, 'show'])
    ->name('jurusan.show');

Route::get('/jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])
    ->name('jurusan.edit');

Route::put('/jurusan/{jurusan}', [JurusanController::class, 'update'])
    ->name('jurusan.update');

Route::delete('/jurusan/{jurusan}', [JurusanController::class, 'destroy'])
    ->name('jurusan.destroy');


// =====================================================
// GURU
// =====================================================

Route::get('/guru', [GuruController::class, 'index'])
    ->name('guru');

Route::get('/guru/create', [GuruController::class, 'create'])
    ->name('guru.create');

Route::post('/guru', [GuruController::class, 'store'])
    ->name('guru.store');

Route::get('/guru/{guru}/edit', [GuruController::class, 'edit'])
    ->name('guru.edit');

Route::put('/guru/{guru}', [GuruController::class, 'update'])
    ->name('guru.update');

Route::delete('/guru/{guru}', [GuruController::class, 'destroy'])
    ->name('guru.destroy');


// =====================================================
// EKSTRAKURIKULER
// =====================================================

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])
    ->name('ekstrakurikuler');

Route::get('/ekstrakurikuler/create', [EkstrakurikulerController::class, 'create'])
    ->name('ekstrakurikuler.create');

Route::post('/ekstrakurikuler', [EkstrakurikulerController::class, 'store'])
    ->name('ekstrakurikuler.store');

Route::get('/ekstrakurikuler/{ekstrakurikuler}/edit', [EkstrakurikulerController::class, 'edit'])
    ->name('ekstrakurikulers.edit');

Route::put('/ekstrakurikuler/{ekstrakurikuler}', [EkstrakurikulerController::class, 'update'])
    ->name('ekstrakurikulers.update');

Route::delete('/ekstrakurikuler{ekstrakurikuler}', [EkstrakurikulerController::class, 'destroy'])
    ->name('ekstrakurikulers.destroy');


// =====================================================
// GALERY
// =====================================================

Route::get('/galery', [GaleryController::class, 'index'])
    ->name('galery');

Route::get('/galery/create', [GaleryController::class, 'create'])
    ->name('galery.create');

Route::post('/galery', [GaleryController::class, 'store'])
    ->name('galery.store');

Route::get('/galery/{galery}/edit', [GaleryController::class, 'edit'])
    ->name('galery.edit');

Route::put('/galery/{galery}', [GaleryController::class, 'update'])
    ->name('galery.update');

Route::delete('/galery/{galery}', [GaleryController::class, 'destroy'])
    ->name('galery.destroy');


// =====================================================
// WELCOME
// =====================================================

Route::view('/welcome', 'welcome')
    ->name('welcome');