<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\filmController;
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
    return view('layout.master');
});

//halaman dashboard
route::get('/dashboard', [dashboardController::class, 'index']);
//tabel genre
route::resource('/genre', genreController::class);
//tabel film
route::resource('/film', filmController::class);
