<?php

use App\Http\Controllers\panel\AdminController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// WEB

Route::get('/', function () {
    return view('sections.home');
});

Route::get('/asesoramiento', function () {
    return view('sections.asesoramiento');
});
Route::get('/home', function () {
    return view('sections.home');
});

Route::get('/about', function () {
    return view('sections.about');
});

Route::get('/contacto', function () {
    return view('sections.contacto');
});

Route::get('/faq', function () {
    return view('sections.faq');
});

Route::get('/cursos', function () {
    return view('sections.cursos');
});

Route::get('/blog', function () {
    return view('sections.blog');
});

Route::get('/contdown/formnovedades', 'App\Http\Controllers\Sectionblades@contdownFormulario')->name('contdown.formulario');


//ADMIN

// Route::prefix('admin')->group(function(){
    // Route::get('/admin',[AdminController::class, 'home']);
// });
