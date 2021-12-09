<?php

use Illuminate\Support\Facades\Route;
use App\Domain\Api\Musicians;
use App\Http\Controllers\MusicianController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('musicians', MusicianController::class)->middleware('auth');

Route::resource('users', UserController::class)->middleware('auth', 'admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/livemusicians', \App\Http\Livewire\Musicians::class);

require __DIR__.'/auth.php';