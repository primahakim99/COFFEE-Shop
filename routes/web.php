<?php

use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OwnerOrderController;

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
Route::get('/productadmin', [WelcomeController::class, 'product'])->name('product');
Route::get('/wishlist', [WelcomeController::class, 'wishlist'])->name('wishlist');
Route::get('/order', [WelcomeController::class, 'order'])->name('order');
Route::put('update-order/{id}/{status}',[WelcomeController::class, 'updateOrder']);
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/sign-in', [WelcomeController::class, 'SignIn'])->name('auth.sign-in');
Route::get('/sign-up', [WelcomeController::class, 'SignUp'])->name('auth.sign-up');
Route::GET('/user/profile', [WelcomeController::class, 'profile'])->name('userProfile');
Route::put('/user/profile/update', [CustomerController::class, 'profile'])->name('customerData.profile');


Auth::routes();


Route::middleware(['auth', 'OwnerAccess'])->group(function () {

    Route::get('/owner', [WelcomeController::class, 'indexOwner'])->name('welcomeOwner');
    //owner side
    // Route::get('/productList', [WelcomeController::class, 'product_list'])->name('productList');
    Route::resource('/product', ProductController::class);
    Route::resource('/storeOwner', StoreController::class);
    Route::resource('/orderOwner', OwnerOrderController::class);
    Route::get('/download-pdf/{id}', [OwnerOrderController::class, 'pdfPrint']);
});

Route::middleware(['auth', 'AdminAccess'])->group(function () {
    // Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin', [WelcomeController::class, 'indexAdmin'])->name('welcomeAdmin');
    //admin side
    // Route::get('/ownerData', [OwnerController::class, 'index'])->name('customerData');
    // Route::get('/customerData', [CustomerController::class, 'index'])->name('customerData');
    Route::resource('ownerData',OwnerController::class);
    Route::resource('customerData',CustomerController::class);
    Route::resource('storeData',StoresController::class);
    Route::get('/transaction', [WelcomeController::class, 'transaction'])->name('transaction');
});


Route::middleware(['auth', 'UserAccess'])->group(function () {
});

Route::post('add_to_cart', [CartController::class, 'store']);//add-to-cart
Route::post('add_to_wishlist', [ProductController::class, 'addWishlist']);//add-to-Wishllist
Route::get('/deletewl/{id}', [ProductController::class, 'destroyWishlist']);//delete-wishlist
Route::post('checkout', [CheckoutController::class, 'checkout']);//checkout
Route::post('evidence_shipping', [OwnerOrderController::class, 'store']);//evidence_shipping

Route::get('/updatecart/{id}/{quantity}', [CartController::class, 'update']);
Route::get('/deletecart/{carts}', [CartController::class, 'destroy']);

