<?php
use App\http\controllers\userController;

use Illuminate\Support\Facades\Route;

route:: get("/",[usercontroller::class,"index"]);