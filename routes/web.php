<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

// Route Home
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// Route About
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Eri maulana",
        "email" => "erimaulana.69@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kecil.png"
    ]);
});

// Route Posts/Blog
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);