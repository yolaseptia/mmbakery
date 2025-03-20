<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route untuk Landing Page (Beranda)
Route::get('/', [PageController::class, 'home'])->name('home');

// Route untuk Halaman Lainnya
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/outlet', [PageController::class, 'outlet'])->name('outlet');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

