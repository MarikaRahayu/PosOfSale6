<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;


/*
|--------------------------------------------------------------------------
| Redirect
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    return Auth::check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');

});



/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login',
        [AuthController::class, 'index']
    )->name('login');


    Route::post('/auth',
        [AuthController::class, 'auth']
    )->name('auth');

});




/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {


    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard',
        [DashboardController::class, 'index']
    )->name('dashboard');



    /*
    |--------------------------------------------------------------------------
    | Logout
    |--------------------------------------------------------------------------
    */

    Route::post('/logout',
        [AuthController::class, 'logout']
    )->name('logout');





    /*
    |--------------------------------------------------------------------------
    | Admin
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:admin')->group(function () {

        Route::resource('users', UserController::class);

    });





    /*
    |--------------------------------------------------------------------------
    | Admin & Kasir
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:admin,kasir')->group(function () {


        /*
        | Produk
        */

        Route::resource('produk', ProdukController::class);




        /*
        | Penjualan
        */

        Route::controller(PenjualanController::class)->group(function () {


            // halaman utama
            Route::get('/penjualan',
                'index'
            )->name('penjualan.index');



            // tambah
            Route::get('/penjualan/create',
                'create'
            )->name('penjualan.create');



            // simpan
            Route::post('/penjualan',
                'store'
            )->name('penjualan.store');



            // detail
            Route::get('/penjualan/{penjualan}',
                'show'
            )->name('penjualan.show');



            // edit
            Route::get('/penjualan/{penjualan}/edit',
                'edit'
            )->name('penjualan.edit');



            // update
            Route::put('/penjualan/{penjualan}',
                'update'
            )->name('penjualan.update');



            // hapus transaksi
            Route::delete('/penjualan/{penjualan}',
                'destroy'
            )->name('penjualan.destroy');



            /*
            | Checkout
            */

            Route::post('/penjualan/checkout',
                'checkout'
            )->name('penjualan.checkout');



            /*
            | Cancel transaksi
            */

            Route::post('/penjualan/cancel',
                'cancel'
            )->name('penjualan.cancel');



            /*
            | Hapus item penjualan
            */

            Route::delete('/penjualan/item/{id}',
                'destroyItem'
            )->name('penjualan.destroyItem');


        });


    });


});