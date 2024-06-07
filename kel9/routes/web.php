<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\castController;
use App\Http\Controllers\filmController;
use App\Http\Controllers\kritikController;
use App\Http\Controllers\peranController;
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
    return view('welcome');
});
    

Route::get('/dashboard', function () {
    return view('back.Bdashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    route::resource('/cast', castController::class);
    route::resource('/film', filmController::class);
    route::resource('/genre', genreController::class);
    route::resource('/kritik', kritikController::class);
    route::resource('/peran', peranController::class);  
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
