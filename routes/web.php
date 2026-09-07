<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Sesuai batasan arsitektur tugas PBKK:
| Dilarang keras menggunakan Route Closure untuk rendering view.
| Seluruh rute didelegasikan secara terstruktur ke PageController.
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/project-idea', [PageController::class, 'project'])->name('project');

// Fitur Tantangan Tambahan: Kalkulator Dinamis URL
Route::get('/hitung/{angka1}/{angka2}/{operasi}', [PageController::class, 'hitung'])->name('kalkulator');
