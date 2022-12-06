<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Models\Movies;
use App\Models\kategori;

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

Route::get('/', function () {
    return view('welcome', [
        "title" => "Filmify"
    ]);
});

Route::get('/Tentang', function () {
    return view('Tentang', [
        "title" => "Tentang"
    ]);
});

Route::get('/FAQ', function () {
    return view('FAQ', [
        "title" => "FAQ"
    ]);
});

Route::get('/Daftar', function () {
    return view('Daftar');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/Home', [HomeController::class, 'index'])->middleware('auth');




Route::get('/Trending', function () {
    return view('Trending', [
        "title" => "Trending"
    ]);
});

Route::get('/Kategori', [KategoriController::class, 'index']);
Route::get('/Kategori/{kategori:slug}', [KategoriController::class, 'show']);

Route::get('/Koleksi', function () {
    return view('Koleksi', [
        "title" => "Koleksi"
    ]);
});

Route::get('/Profil', function () {
    return view('Profil', [
        "title" => "Profil"
    ]);
});

// Route::get('/movies', function () {
//     return view('movies', [
//         "title" => "Movies",
//         "movies" => Movies::all()
//     ]);
// });