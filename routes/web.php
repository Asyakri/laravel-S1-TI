<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//  php artisan make:controller namacontroller (-r) Opsional

// Route about (hyperlink), [(controller yang di tuju),(function yang dituju)]
Route::get('/about', [App\Http\Controllers\AboutController::class,'index'])->name('about');

// Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class,'index']);
Route::get('/', [App\Http\Controllers\MahasiswaController::class,'index'])->name('mahasiswa');
