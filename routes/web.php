<?php

use Illuminate\Support\Facades\Route;

Route::get('/materi', function () {
    return view('layouts/materi');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pendahuluan', function () {
    return view('pendahuluan');
});

Route::get('/tata_surya', function () {
    return view('tata_surya');
});

Route::get('/bumi_satelit', function () {
    return view('bumi_satelit');
});

Route::get('/matahari', function () {
    return view('matahari');
});

Route::get('/jupiter', function () {
    return view('jupiter');
});

Route::get('/jupiter-latihan', function () {
    return view('jupiter-latihan');
});

Route::get('/jupiter-game', function () {
    return view('jupiter-game');
});