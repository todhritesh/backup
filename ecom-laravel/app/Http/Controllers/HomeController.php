<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("core.home-page");
    }

    public function product_view(){
        return view("core.product-page");
    }

    public function checkout(){
        return view("core.checkout");
    }
}
