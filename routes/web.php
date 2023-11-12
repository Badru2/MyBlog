<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
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

// User Page Start
Route::get('/', [ViewController::class, 'index'])->name('user');
Route::get('/laravel', [ViewController::class, 'laravel'])->name('laravel.page');
Route::get('/flutter', [ViewController::class, 'flutter'])->name('flutter.page');
Route::get('/bootstrap', [ViewController::class, 'bootstrap'])->name('bootstrap.page');
Route::get('/react', [ViewController::class, 'react'])->name('react.page');
Route::get('/show/{id}', [ViewController::class, 'show'])->name('show.page');
// User Page End

// Admin Page Start
Route::resource('/admin', PostController::class)->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Admin Page End

require __DIR__ . '/auth.php';
