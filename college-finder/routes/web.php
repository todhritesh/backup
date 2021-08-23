<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;

route:: get("/",[CollegeController::class,"index"]);

route::get("/form",[CollegeController::class,"form"])->name("form");

route::post("saveCollege",[CollegeController::class,"InsertCollege"])->name("saveCollege");
route::post("saveCategory",[CollegeController::class,"InsertCategory"])->name("saveCategory");
