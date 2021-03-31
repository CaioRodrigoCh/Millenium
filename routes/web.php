<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('portal.home');
})->name('portal.home');

Route::get('/cursos', function () {
    return view('portal.cursos');
})->name('portal.cursos');

Route::get('/contato', function () {
    return view('portal.contato');
})->name('portal.contato');

Route::get('/teste', function () {
    return view('portal.teste');
})->name('portal.teste');

Route::resource('products','ProductController');
