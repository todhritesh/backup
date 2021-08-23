<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

route::get("/",[ItemController::class,"index"])->name("home");

Route::post("/insertcat",[ItemController::class,"insertCat"])->name("insertCat");

Route::get("/search",[ItemController::class,"search"])->name("search");
Route::get("/filter/{id}",[ItemController::class,"filter"])->name("filter");

route::get("/view/{itemid}/Category/{catId}",[ItemController::class,"view"])->name("view");
route::match(["get","post"],"/login",[ItemController::class,"login"])->name("login");



Route::group(["middleware"=>"loginCheck"],function(){
    route::match(["get","post"],"/register",[ItemController::class,"register"])->name("register");
    Route::get("/logout",[ItemController::class,"logout"])->name("logout");
    route::match(["get","post"],"/insert",[ItemController::class,"insert"])->name("insert");
});

