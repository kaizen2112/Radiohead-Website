<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\MusicstoreController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminToursController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\OrderController;

Route::get('/', [TourController::class,  'index'])->name('homepage');


Route::get('/about', function () {
    return view('about');
});

Route::get('/albums', [AlbumController::class, 'index']);

Route::get('/albums/{id}', [AlbumController::class, 'show']);



Route::get('/store', [MerchController::class, 'index']);

// Route::get('/store/albums/{album}', [MerchController::class, 'showalbum']);

// Route::get('/store/albums/{merchs}', [MerchController::class, 'show']);

Route::get('/store/albums/{id}', [MerchController::class, 'showalbum']);

Route::get('/store/merch/{id}', [MerchController::class, 'showmerch']);

Route::get('/tours/{id}', [TourController::class, 'showtour']);

Route::controller(OrderController::class)->group(function() {
    Route::get('/order/form', 'showOrderForm')->name('order.create');
    // Store the order
    Route::post('/order/store', 'storeOrder');
    // show order in admin page
    Route::get('/orders/show', 'showOrder');
});



Route::group(['prefix'=>'admin'], function() {

    Route::group(['middleware' => 'admin.guest'], function() {

         Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
         Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');


    });

    Route::group(['middleware' => 'admin.auth'], function() {


        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');

        Route::get('/products', [ProductsController::class, 'productshow'])->name('admin.products');
        Route::post('/products/store', [ProductsController::class, 'store']);


        Route::get('/products/create', [ProductsController::class, 'create'])->name('admin.products.create');

        Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('admin.products.edit');
        Route::put('/products/{id}', [ProductsController::class, 'update'])->name('admin.products.update');

        Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('admin.products.destroy');

        // Show create form of Album

        // Store the Album

        // SHOW THE ALBUM


        // sONGS CREATE FORM
        // Route::get('/songs/create', [MusicstoreController::class, 'show'])->name('admin.products.show');
        // sTORE THE SONG

        // SHOW THE SONG





        Route::get('/tours', [AdminToursController::class, 'tourshow'])->name('admin.tours');
        Route::post('/tours', [AdminToursController::class, 'tourstore']);

        Route::get('/tours/create', [AdminToursController::class, 'tourcreate'])->name('admin.tours.create');
        Route::get('/tours/{id}/edit', [AdminToursController::class, 'turedit'])->name('admin.tours.edit');
        Route::put('/tours/{id}', [AdminToursController::class, 'tourupdate'])->name('admin.tours.update');

        Route::delete('/tours/{id}', [AdminToursController::class, 'tourdestroy'])->name('admin.tours.destroy');


        Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');

    });

});




