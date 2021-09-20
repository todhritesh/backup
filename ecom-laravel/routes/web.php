<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::resource('category',CategoryController::class);
Route::resource('product',ProductController::class);
Route::resource('coupon',CouponController::class);
Route::resource('address',AddressController::class);
Route::resource('order',OrderController::class);
Route::resource('orderitem',OrderItemController::class);

Route::get("/",[HomeController::class,"home"])->name("home");
Route::get("/search",[HomeController::class,"search"])->name('search');
Route::get("/view/{id}",[HomeController::class,"product_view"])->name('view');
Route::get("/cart",[HomeController::class,"cart"])->name('cart');
Route::get("/checkout",[HomeController::class,"checkout"])->name('checkout');
Route::get("/logout",[HomeController::class,"logout"])->name('checkout');


//auth required
Route::middleware('auth')->group(function(){
    Route::post('add_to_cart/{id}',[HomeController::class,'add_to_cart'])->name("addcart");
    Route::get("/removecart/{id}",[HomeController::class,"remove_from_cart"])->name('removecart');
    Route::post("/add-coupon",[HomeController::class, "addCoupon"])->name("addCoupon");
    Route::get("/remove-item-from-cart/{id}",[HomeController::class, "removeItemFromCart"])->name("removeItemCart");
});

//---------------------------------------------admin work
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
