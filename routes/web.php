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

Route::get('/faro', function () {
    return view('portal.faro');
})->name('portal.faro');

Route::get('/sapiens', function () {
    return view('portal.sapiens');
})->name('portal.sapiens');

Route::get('/saolucas', function () {
    return view('portal.saolucas');
})->name('portal.saolucas');

Route::resource('products','ProductController');
