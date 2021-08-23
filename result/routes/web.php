<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\StudentController;
use App\Http\controllers\MarkController;

Route::view("/insert","insert")->name("insert");

route::get("/",[StudentController::class,"show_list"])->name("home");

Route::post("/insert/student",[StudentController::class,"insert_student"])->name("insert_student");

route::get("/show/single/result/{id}",[StudentController::class,"show_single_result"])->name("result");
