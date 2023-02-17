<?php

use App\Http\Controllers\ContenidosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::view('/', 'inicio')->name('inicio');

Route::view('/mangas', 'mangas')->name('mangas');

Route::view('/remangas', 'remangas')->name('remangas');

Route::get('/Post', [ContenidosController::class, 'index'])->name('Post.index');
Route::get('/Post/{Post}', [ContenidosController::class, 'show'])->name('Post.show');