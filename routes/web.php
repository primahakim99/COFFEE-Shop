<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/shop', [WelcomeController::class, 'shop'])->name('shop');
Route::get('/wishlist', [WelcomeController::class, 'wishlist'])->name('wishlist');
Route::get('/cart', [WelcomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [WelcomeController::class, 'checkout'])->name('checkout');

Route::get('/sign-in', [WelcomeController::class, 'SignIn'])->name('auth.sign-in');
Route::get('/sign-up', [WelcomeController::class, 'SignUp'])->name('auth.sign-up');

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'OwnerAccess'])->group(function () {
    // Route::get('/owner', [HomeController::class, 'ownerHome'])->name('owner.home');
    Route::get('/owner', [WelcomeController::class, 'indexOwner'])->name('welcomeOwner');
});

Route::middleware(['auth', 'AdminAccess'])->group(function () {
    // Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin', [WelcomeController::class, 'indexAdmin'])->name('welcomeAdmin');
});

Route::get('/customer/home', [HomeController::class, 'customerHome'])->name('customer.home')->middleware('UserAccess');


//admin side
Route::get('/ownerData', [WelcomeController::class, 'ownerData'])->name('ownerData');
Route::get('/customerData', [WelcomeController::class, 'customerData'])->name('customerData');
Route::get('/transaction', [WelcomeController::class, 'transaction'])->name('transaction');

//owner side
Route::get('/productList', [WelcomeController::class, 'product_list'])->name('productList');
Route::get('/storeOwner', [WelcomeController::class, 'storeOwner'])->name('storeOwner');
Route::get('/orderOwner', [WelcomeController::class, 'orderOwner'])->name('orderOwner');
