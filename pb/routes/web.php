<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PhoneController::class,"index"])->name("home");
route::get("/{id}/delete",[PhoneController::class,"delete"])->name("delete");
route::match(["get","post"],"/{id}/update",[PhoneController::class,"update"])->name("update");
Route::post('/insert', [PhoneController::class,"insert"])->name("insert");
