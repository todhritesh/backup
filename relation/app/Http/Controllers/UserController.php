<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //public function index(){
        //return view("home",['details'=>User::all()]);
    //}

    public function index(){

        
        return view("home", ["details" => User::find(2)]);

        // $data = User::all();
        // return view("home",["details"=>$data]);
    }
}
