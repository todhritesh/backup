<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

route::get("/",[StudentController::class,"index"]);

route::post("/store",[StudentController::class,"store"])->name("store");

route::get("/insert",[StudentController::class,"insert"])->name("insert");
