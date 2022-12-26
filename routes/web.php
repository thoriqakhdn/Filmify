<?php

use App\Models\User;
use App\Models\Movies;
use App\Models\Review;
use App\Models\kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardMovies;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DashboardKategori;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;

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
Route::post('/Home', [HomeController::class, 'upvote']);

Route::get('/Dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/Dashboard/kategori', DashboardKategori::class)->middleware('auth');
Route::resource('/Dashboard/movie', DashboardMovies::class)->middleware('auth');

Route::get('/Trending', function (Movies $movie) {
    return view('Trending', [
        "title" => "Trending",
        'films' => $movie::orderBy('upvote', 'desc')->take(8)->get()
    ]);
})->middleware('auth');

Route::get('/Kategori', [KategoriController::class, 'index']);
Route::get('/Kategori/{kategori:slug}', function (kategori $kategori) {
    return view('1kategori', [
        'title' => "Kategori",
        'films' => $kategori->movies,
        'kategori' =>  $kategori->name
    ]);
})->middleware('auth');

Route::get('/Koleksi', function () {
    return view('Koleksi', [
        "title" => "Koleksi"
    ]);
})->middleware('auth');

Route::get('/Profil', function () {
    return view('Profil', [
        "title" => "Profil",
        "user" => Auth::user()
    ]);
})->middleware('auth');

Route::get('{movie:slug}', function (Movies $movie) {
    return view('1movies', [
        'title' => $movie->title,
        'films' => $movie,
        'kategori' => kategori::where('id', $movie->kategori_id)->first()
    ]);
})->middleware('auth');

Route::post('review', [ReviewController::class, 'store']);


// Route::get('/{slug}', function () {
//     $movies = Movies::where('slug', $slug)->first();
//     @dd($movies);
//     return view('1movies', [
//         'title' => $movies->title,
//         'film' => $movies
//     ]);
// });

// Route::get('/movies', function () {
//     return view('movies', [
//         "title" => "Movies",
//         "movies" => Movies::all()
//     ]);
// });
