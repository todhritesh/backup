<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Book;
use App\Models\Order;

//dashboard
Route::get('/', function () {
    return view('core.home');
})->name('dashboard.home');

//manage books page
Route::get("/manage-books",function(){
    return view("core.manage_books");
})->name('manage.books');

//add book page
Route::get("/add-books",function(){
    return view("core.add_book");
})->name('add.book');

//add entry/order page
Route::get("/add-entry",function(){
    return view("core.add_entry");
})->name('add.entry');

//add active order page
Route::get("/orders/active",function(){
    return view("core.active_order");
})->name('orders.active');

//add all order page
Route::get("/orders/all",function(){
    return view("core.orders");
})->name('orders.all');

//manage students page
Route::get("/students/all",function(){
    return view("core.students");
})->name('students.all');

//add student page
Route::get("/students/add",function(){
    return view("core.add_student");
})->name('students.add');

// ---------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
