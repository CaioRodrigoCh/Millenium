<?php

use Illuminate\Support\Facades\Route;

Route::get('/contate-nos', function () {
    return view('portal.contate-nos');
})->name('portal.contate-nos');

Route::get('/', function () {
    return view('portal.home');
})->name('portal.home');

Route::get('/cursos', function () {
    return view('portal.cursos');
})->name('portal.cursos');

Route::get('/faro', function () {
    return view('portal.faro');
})->name('portal.faro');

Route::get('/sapiens', function () {
    return view('portal.sapiens');
})->name('portal.sapiens');

Route::get('/saolucas', function () {
    return view('portal.saolucas');
})->name('portal.saolucas');

Route::get('/uniron', function () {
    return view('portal.uniron');
})->name('portal.uniron');

Route::resource('products','ProductController');

Route::get('/listar-faculdades', 'FaculdadesController@listarFaculdades');


