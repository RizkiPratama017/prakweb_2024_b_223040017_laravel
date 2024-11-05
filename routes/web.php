<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;


Route::get('/', function () {
    return view('home', ['title' => 'Halaman Utama']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rizki Pratama', 'title' => 'Tentang Kami']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Artikel', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . ' Artikel oleh ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => 'Artikel dalam Kategori: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Kontak']);
});

Route::get('/dashboard', function () {
    return view('dashboard.index', ['title' => 'Halaman Dashboard']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');


Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
