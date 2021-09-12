<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AdminController;

route::get("/",function(){
    return view("home");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix("admin")->group(function(){
    route::get("/",[AdminController::class,"index"])->name('admin.index');

    //product routes
    route::get("products/",[AdminController::class,"product"])->name('admin.product');
    route::match(["get","post"],"products/add",[AdminController::class,"insertProduct"])->name('admin.product.insert');
    route::delete("product/delete/{id}",[AdminController::class,"deleteProduct"])->name("admin.product.delete");

    //category routes
    route::get("categories/",[AdminController::class,"category"])->name('admin.category');
    route::match(["get","post"],"category/add",[AdminController::class,"insertCategory"])->name('admin.category.insert');
    route::delete("category/delete/{id}",[AdminController::class,"deleteCategory"])->name("admin.category.delete");

    //coupon routes
    route::match(["get","post"],"coupon/",[AdminController::class,"coupon"])->name('admin.coupon');

    //address routes
    route::get("address/",[AdminController::class,"address"])->name("admin.address");

    //admin routes
    route::get("users/",[AdminController::class,"users"])->name("admin.users");

    //order routes
    route::get("orders/",[AdminController::class,"orders"])->name("admin.order");

});



