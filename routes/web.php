<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
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
    return view('index');
})->name('index');

Route::get('/artists', [ArtistController::class, 'index'])->name('artists');

Route::get('/albums', [AlbumController::class, 'index'])->name('albums');


Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('albums.show');
