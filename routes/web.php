<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/tecnologia', function () {
    return view('tecnologia');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/catalogo/deportivos', function () {
    return view('catalogo');
});