<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\MusicstoreController;
use App\Http\Controllers\admin\AdminLoginController;

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



Route::group(['prefix'=>'admin'], function() {

    Route::group(['middleware' => 'admin.guest'], function() {

         Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
         Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');


    });

    Route::group(['middleware' => 'admin.auth'], function() {

        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');


    });

});




