<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileController;

Route::get("/",[FileController::class,"index"])->name("home");

route::post("/insert",[FileController::class,"store"])->name("insert");


