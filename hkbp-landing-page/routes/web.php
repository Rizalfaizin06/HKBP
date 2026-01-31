<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Tentang Kami page
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Warta Jemaat page
Route::get('/warta', function () {
    return view('warta');
})->name('warta');

// Berita page
Route::get('/berita', function () {
    return view('berita');
})->name('berita');

// Pelayanan page
Route::get('/pelayanan', function () {
    return view('pelayanan');
})->name('pelayanan');

// Galeri page
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

// Kontak page
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
