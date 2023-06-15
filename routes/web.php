<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\ClientsController;

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

// start route font-end
Route::prefix('Clients')->name('Clients.')->group(function()
{
    // route pages contents clients
    Route::group(['prefix' =>'Contents'], function()
    {
        Route::get('/',[ClientsController::class,'index'])->name('index');

        Route::get('shop',[ClientsController::class,'shop'])->name('shop');

        Route::get('shopdetail',[ClientsController::class,'shopdetail'])->name('shopdetail');

        Route::get('cart',[ClientsController::class,'cart'])->name('cart');

        Route::get('checkout',[ClientsController::class,'checkout'])->name('checkout');

        Route::get('contact',[ClientsController::class,'contact'])->name('contact');

        // Route::get('search',[ClientsController::class,'search'])->name('search');
    });

    // // route login and register
    // Route::group(['prefix' =>'sign'], function()
    // {
    //     Route::get('login/',[LoginAndRegisterController::class,'getLogin'])->name('login');
            
    //     Route::post('login/',[LoginAndRegisterController::class,'postLogin'])->name('postLogin');

    //     Route::get('register/',[LoginAndRegisterController::class,'getRegister'])->name('register');

    //     Route::post('register/',[LoginAndRegisterController::class,'postRegister']);
            
    // });

    // // route add to cart
    // Route::group(['prefix' =>'cart'], function()
    // {
    //     Route::get('ShoppingCart/',[CartController::class,'cart'])->name('cart');
            
    //     Route::get('add-to-cart/{id}',[CartController::class,'addtocart'])->name('addtocart');

    //     Route::post('/update-cart/{id}',[CartController::class,'updatecart'])->name('updatecart');

    //     Route::delete('deletecart/{id}',[CartController::class,'delete']);
            
    // });
});

// end route font-end
