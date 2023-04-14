<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisteredUserController;
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

Route::get('/', function () {
    return view('start');
});

Route::view('/start', 'start')->name('start');
Route::view('/about', 'about')->name('about')->middleware('auth');
Route::view('/contact', 'contact')->name('contact');
Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
// Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
// Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
// Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);
