<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


route::get("/",[StudentController::class,"index"])->name("home");
route::post("/store",[StudentController::class,"store"])->name("store");
route::get("/delete/{id}",[StudentController::class,"delete"])->name("delete");
route::get("/update/{id}",[StudentController::class,"update"])->name("update");
route::post("/update/{id}",[StudentController::class,"modify"])->name("modify");
