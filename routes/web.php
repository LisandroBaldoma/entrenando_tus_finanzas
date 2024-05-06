<?php

use App\Http\Controllers\UsuariosController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sections.home');
});

Route::get('/membresia', function () {
    return view('sections.membresia');
});
Route::get('/contdown', function () {
    return view('sections.contdown');
});

Route::get('/contdown/formnovedades', 'App\Http\Controllers\Sectionblades@contdownFormulario')->name('contdown.formulario');

