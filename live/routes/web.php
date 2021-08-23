<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

route::get("/home",[UserController::class,"index"]);
