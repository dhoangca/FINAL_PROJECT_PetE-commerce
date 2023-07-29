<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\ClientsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ManagePetController;
use App\Http\Controllers\Admin\ManageProductsController;
use App\Http\Controllers\Admin\ManageCategoriController;
use App\Http\Controllers\AuthA\RegisterController;
use App\Http\Controllers\AuthA\LoginController;
use App\Http\Controllers\AuthA\LogoutController;
use App\Http\Controllers\AuthU\RegisterUController;
use App\Http\Controllers\AuthU\LoginUController;
use App\Http\Controllers\AuthU\LogoutUController;
use App\Http\Controllers\Clients\SearchController;
use App\Http\Controllers\Admin\ManageOrdersController;
use App\Http\Controllers\Clients\CategoriController;
use App\Http\Controllers\Clients\CartController;
use App\Http\Controllers\Clients\ProductsController;


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
// Route index
Route::get('/', [ClientsController::class, 'index'])->name('index');

// start route font-end
Route::prefix('Clients')->name('Clients.')->group(function () {

    // group route của function login, register and logout
    Route::group(['prefix' => 'AuthU'], function () {

        Route::get('register/', [RegisterUController::class, 'getRegisterU'])->name('Register');

        Route::post('register/', [RegisterUController::class, 'postRegisterU'])->name('postRegisterU');

        Route::get('login/', [LoginUController::class, 'getLoginU'])->name('Login');

        Route::post('login/', [LoginUController::class, 'postLoginU'])->name('postLoginU');

        Route::post('logout/', [LogoutUController::class, 'logoutU'])->name('logout');
    });

    // route pages contents clients
    Route::group(['prefix' => 'Contents'], function () {

        Route::get('shop/', [ClientsController::class, 'shop'])->name('shop');

        Route::get('shopdetailproducts/{product_id}', [ClientsController::class, 'shopdetailproducts'])->name('shopdetailproducts');

        Route::get('shopdetailpet/{pet_id}', [ClientsController::class, 'shopdetailpet'])->name('shopdetailpet');

        Route::get('contact/', [ClientsController::class, 'contact'])->name('contact');

        Route::get('search/', [SearchController::class, 'search'])->name('search');

        Route::get('filtered-products-and-pets/{category_id}', [CategoriController::class, 'filterByCategory'])->name('filtered-products-and-pets');

        // Route::get('products/filter/',[ProductsController::class,'filterByPrice'])->name('filterByPrice');
    });

    // route Cart
    Route::group(['prefix' => 'Cart'], function () {

        Route::get('cart/', [CartController::class, 'cart'])->name('cart');

        Route::get('add-to-cart/{item_id}/{item_type}', [CartController::class, 'addToCart'])->name('addToCart');

        Route::post('add-to-cart/{item_id}/{item_type}', [CartController::class, 'addToCart'])->name('addToCart');

        Route::get('get-cart-count/', [CartController::class, 'getCartCount'])->name('getCartCount');

        // Route::post('/update-cart/{id}',[CartController::class,'updatecart'])->name('updatecart')    ;

        Route::delete('deletecart/{item_id}', [CartController::class, 'delete'])->name('deletecart');

        // Route::get('checkout', [CartController::class, 'checkoutForm'])->name('getCheckout')->middleware('auth.user');

        Route::post('checkout', [CartController::class, 'checkoutForm'])->name('getCheckout')->middleware('auth.user');
    });

    // Order Routes
    Route::group(['prefix' => 'Order'], function () {

        Route::post('checkout', [CartController::class, 'placeOrder'])->name('postCheckout')->middleware('auth.user');

        Route::get('checkout/success/{order}', [CartController::class, 'orderSuccess'])->name('checkout.success');
    });
});
// end route font-end

// ===============================================================================================================

// start route admin
Route::prefix('Admins')->name('Admins.')->group(function () {

    Route::get('/', [AdminController::class, 'welcome'])->name('welcome');

    Route::get('index/', [AdminController::class, 'index'])->name('index')->middleware('role:admin,staff');

    // group route của function login, register and logout
    Route::group(['prefix' => 'AuthA'], function () {
        Route::get('register/', [RegisterController::class, 'getRegister'])->name('Register');

        Route::post('register/', [RegisterController::class, 'postRegister'])->name('postRegister');

        Route::get('login/', [LoginController::class, 'getLogin'])->name('Login');

        Route::post('login/', [LoginController::class, 'postLogin'])->name('postLogin');

        Route::post('logout/', [LogoutController::class, 'logout'])->name('logout');
    });

    // group route của users
    Route::group(['prefix' => 'users'], function () {

        Route::get('listuser/', [UserController::class, 'listuser'])->name('listuser')->middleware('role:admin', 'can:access-users');

        Route::get('manageusers/', [UserController::class, 'manageusers'])->name('manageusers')->middleware('role:admin', 'can:access-users');

        // Route for blocking a user
        Route::get('users/{user_id}/block', [UserController::class, 'blockUser'])->name('users.block')->middleware('role:admin', 'can:access-users');

        // Route for unblocking a user
        Route::get('users/{user_id}/unblock', [UserController::class, 'unblockUser'])->name('users.unblock')->middleware('role:admin', 'can:access-users');

        // Route::get('create/', [UserController::class, 'getCreate'])->name('create');

        // Route::post('create/', [UserController::class, 'postCreate']);

        // Route::get('edit/{id}', [UserController::class, 'getEditCate']);

        // Route::post('edit/{id}', [UserController::class, 'postEditCate']);

        Route::get('delete/{id}', [UserController::class, 'delete'])->middleware('role:admin', 'can:access-users');
    });

    // group route của pet
    Route::group(['prefix' => 'Pets'], function () {

        Route::get('listpets/', [ManagePetController::class, 'listpets'])->name('listpets')->middleware('role:admin,staff');

        Route::get('managepets/', [ManagePetController::class, 'managepets'])->name('managepets')->middleware('role:admin,staff');

        Route::get('create/', [ManagePetController::class, 'getCreatePets'])->name('create')->middleware('role:admin,staff');

        Route::post('create/', [ManagePetController::class, 'postCreatePets'])->middleware('role:admin,staff');

        Route::get('edit/{id}', [ManagePetController::class, 'getEditPets'])->middleware('role:admin,staff');

        Route::post('edit/{id}', [ManagePetController::class, 'postEditPets'])->middleware('role:admin,staff');

        Route::get('delete/{id}', [ManagePetController::class, 'delete'])->middleware('role:admin,staff');
    });

    // group route of products
    Route::group(['prefix' => 'Products'], function () {

        Route::get('listproducts/', [ManageProductsController::class, 'listproducts'])->name('listproducts')->middleware('role:admin,staff');

        Route::get('manageproducts/', [ManageProductsController::class, 'manageproducts'])->name('manageproducts')->middleware('role:admin,staff');

        Route::get('create/', [ManageProductsController::class, 'getCreateProducts'])->name('create')->middleware('role:admin,staff');

        Route::post('create/', [ManageProductsController::class, 'postCreateProducts'])->middleware('role:admin,staff');

        Route::get('edit/{id}', [ManageProductsController::class, 'getEditProducts'])->middleware('role:admin,staff');

        Route::post('edit/{id}', [ManageProductsController::class, 'postEditProducts'])->middleware('role:admin,staff');

        Route::get('delete/{id}', [ManageProductsController::class, 'delete'])->middleware('role:admin,staff');
    });

    // group route of categori
    Route::group(['prefix' => 'Categoris'], function () {

        Route::get('listcategoris/', [ManageCategoriController::class, 'listcategoris'])->name('listcategoris')->middleware('role:admin,staff');

        Route::get('managecategoris/', [ManageCategoriController::class, 'managecategoris'])->name('managecategoris')->middleware('role:admin,staff');

        Route::get('create/', [ManageCategoriController::class, 'getCreateCategori'])->name('create')->middleware('role:admin,staff');

        Route::post('create/', [ManageCategoriController::class, 'postCreateCategori'])->middleware('role:admin,staff');

        Route::get('edit/{id}', [ManageCategoriController::class, 'getEditCategori'])->middleware('role:admin,staff');

        Route::post('edit/{id}', [ManageCategoriController::class, 'postEditCategori'])->middleware('role:admin,staff');

        Route::get('delete/{id}', [ManageCategoriController::class, 'delete'])->middleware('role:admin,staff');
    });

    // group route of order
    // Route::group(['prefix' => 'Orders'], function () {

    //     Route::get('listorders/', [ManageOrdersController::class, 'listorders'])->name('listorders');

    //     Route::get('manageorders/', [ManageOrdersController::class, 'manageorders'])->name('manageorders');

    //     Route::get('edit/{id}', [ManageOrdersController::class, 'getEditOrders']);

    //     Route::post('edit/{id}', [ManageOrdersController::class, 'postEditOrders']);

    //     Route::get('delete/{id}', [ManageOrdersController::class, 'delete']);
    // });

});



// end route back-end