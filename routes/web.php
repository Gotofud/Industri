<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('welcome');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::resource('berita', ArtikelController::class);
Route::get('/tampilan/{id}', [ArtikelController::class, 'read'])->name('berita.read');
Route::resource('kategori', KategoriController::class);