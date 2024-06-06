<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;

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

// Public routes
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('user/login');
})->name('login');

Route::get('/register', function () {
    return view('user/register');
})->name('register');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/materi', function () {
    return view('materi');
})->name('materi');

Route::get('/materi/manajemen', function () {
    return view('materi.materi_manajemen');
})->name('materi.manajemen');

Route::get('/materi/video', function () {
    return view('materi.video_manajemen');
})->name('materi.video');

Route::get('/materi/quiz', function () {
    return view('materi.quiz');
})->name('materi.quiz');

Route::get('/materi/score', function () {
    return view('materi.score');
})->name('materi.score');

Route::get('/materi/feedback', function () {
    return view('materi.feedback');
})->name('materi.feedback');

// // Routes that require authentication
// Route::middleware('auth')->group(function () {
    
// });

// Logout route should be part of the authenticated routes
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');