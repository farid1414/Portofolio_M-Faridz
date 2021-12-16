<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//     return view('/layouts/master');
// });

Route::get('/', [UserController::class, 'index']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/registrasi', [UserController::class, 'registrasi'])->name('registrasi')->middleware('guest');

Route::post('/registrasi', [UserController::class, 'postRegis']);
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/logout', [UserController::class, 'logout']);

Route::Group(['middleware' => ['Author']], function () {
    Route::get('/buat-profil', [UserController::class, 'buatProfil']);
    Route::post('/buat-profil', [UserController::class, 'postProfil']);
    Route::get('/edit-profil', [UserController::class, 'editProfil']);
    Route::put('/edit-profil/{id}', [UserController::class, 'postEdit']);
    Route::get('/blog-saya', [UserController::class, 'blogSaya']);
    Route::get('/buat-blog/slug', [UserController::class, 'checkSlug']);
    Route::get('/create-blog', [UserController::class, 'createBlog']);
    Route::post('/create-blog', [UserController::class, 'postBlog']);
});


Route::get('/read/{post:slug}', [UserController::class, 'read'])->middleware('auth');
Route::get('/read-kategori/{id}', [UserController::class, 'readKategori'])->middleware('auth');
Route::post('/contact', [UserController::class, 'postPesan']);