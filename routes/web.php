<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\MusicstoreController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminToursController;
use App\Http\Controllers\admin\ProductsController;


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

        Route::get('/products', [ProductsController::class, 'productshow'])->name('admin.products');
        Route::post('/products', [ProductsController::class, 'store']);


        Route::get('/products/create', [ProductsController::class, 'create'])->name('admin.products.create');

        Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('admin.products.edit');
        Route::put('/products/{id}', [ProductsController::class, 'update'])->name('admin.products.update');

        Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('admin.products.destroy');





        Route::get('/tours', [AdminToursController::class, 'tourshow'])->name('admin.tours');


        Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');


    });

});




