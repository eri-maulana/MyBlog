<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
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
        "title" => "Home",
        "active" => 'home',
    ]);
});

// Route About
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "nama" => "Eri maulana",
        "email" => "erimaulana.69@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "kecil.png"
    ]);
});

// Route Posts/Blog
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Route Category
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});


// Route Author


// route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// route dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');