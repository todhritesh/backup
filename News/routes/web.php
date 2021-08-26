<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;

Route::get("/",[NewsController::class,"index"])->name("home");
Route::get("/forms",[NewsController::class,"showForm"])->name("showform");

//add state
Route::post("/add/state",[NewsController::class,"addState"])->name("addstate");

//add city
Route::post("/add/city",[NewsController::class,"addCity"])->name("addcity");

//add news
Route::post("/save/news",[NewsController::class,"saveNews"])->name("savenews");

//city news
Route::get("/city/news/{cityid}",[NewsController::class,"cityNews"])->name("citynews");

