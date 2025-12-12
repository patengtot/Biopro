<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/kontak', function() {
    return view('kontak');
});
