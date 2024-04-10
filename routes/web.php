<?php

use App\Http\Controllers\MerchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\MusicstoreController;

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
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [TourController::class,  'index']);


Route::get('/about', function () {
    return view('about');
});

Route::get('/store', [MerchController::class, 'index']);

// Route::get('/store/albums/{album}', [MerchController::class, 'showalbum']);

// Route::get('/store/albums/{merchs}', [MerchController::class, 'show']);

Route::get('/store/albums/{id}', [MerchController::class, 'showalbum']);




