<?php

use App\Http\Controllers\panel\AdminController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CursoControllerUser;

use App\Models\Curso;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('/usuario/cursos', CursoControllerUser::class)->middleware(['auth', 'verified']);

Route::resource('/dashboard/cursos', CursoController::class)->middleware(['auth', 'verified']);

Route::resource('/dashboard/clientes', ClienteController::class)->middleware(['auth', 'verified']);



// Route::resource('/dashboard/cursos/admin', CursoController::class)->middleware(['auth', 'verified']);

// Route::get('/dashboard/cursos', function () {

//     return view('cursos');
// })->middleware(['auth', 'verified'])->name('dashboard.cursos');

// Route::get('/dashboard/cursos/{curso}', [CursoController::class, 'show'])->middleware(['auth', 'verified'])->name('curso.detalle');


// Route::get('/dashboard/cursos/videos', function () {
//     return view('videos');
// })->middleware(['auth', 'verified'])->name('dashboard.videos');


// Route::get('/dashboard/formularios', function () {
//     return view('formularios');
// })->middleware(['auth', 'verified'])->name('dashboard.formularios');

Route::get('/dashboard/formularios', [FormularioController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.formularios');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// WEB

Route::get('/', function () {
    return view('sections.home');
})->name('home');

Route::get('/asesoramiento', function () {
    return view('sections.asesoramiento');
})->name('asesoramiento');


Route::get('/about', function () {
    return view('sections.about');
})->name('about');

Route::get('/contacto', function () {
    return view('sections.contacto');
})->name('contacto');

Route::get('/faq', function () {
    return view('sections.faq');
})->name('faq');

Route::get('/cursos', function () {
    return view('sections.cursos');
})->name('cursos');

Route::get('/blog', function () {
    return view('sections.blog');
})->name('blog');

// Route::get('/contdown/formnovedades', 'App\Http\Controllers\Sectionblades@contdownFormulario')->name('contdown.formulario');
Route::post('/contdown/formnovedades', [FormularioController::class, 'create'])->name('contdown.formulario');

//ADMIN

// Route::prefix('admin')->group(function(){
    Route::get('/admin',[AdminController::class, 'home']);
// });
