<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;

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


Route::get('/studio', function () {
    return view('layouts.studio', [
        "title" => "Studio"
    ]);
});



Route::get('/sign-in', [SigninController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [SigninController::class, 'authenticate']);
Route::get('/sign-up', [SignupController::class, 'index'])->middleware('guest');
Route::post('/sign-up', [SignupController::class, 'store']);
Route::post('/logout', [SigninController::class, 'logout']);

Route::get('/', [HomeController::class, 'index']);

Route::get ('/createfoto', [FotoController::class, 'create']);
Route::post('/upload/photo', [FotoController::class, 'upload'])->name('upload.photo');

Route::get('/createalbum', [AlbumController::class, 'create']);
Route::post('/album/new', [AlbumController::class, 'store'])->name('album.new');
// Route::get('/creating', [PostController::class, 'index']);