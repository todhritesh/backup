<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class StudentController extends Controller
{
    public function index(){
        $data = ['data'=>User::all()];
        return view("home",$data);
    }

    public function insert(){
        return view("insert");
    }

    public function store(Request $req){
        $req->validate([
            'name'=>"required",
            'email'=>"required | email",
            'school'=>"required ",
            'contact'=>"required ",
            'roll_code'=>"required ",
            'hin'=>"required ",
            'eng'=>"required ",
            'math'=>"required ",
            'sci'=>"required ",
            'sst'=>"required ",
        ]);

        //insertion
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->save();

        $user_id = $user->id;


        $user->joinStudent()->create([
            'contact'=>$req->contact,
            'roll_code'=>$req->roll_code,
            'school'=>$req->school,
            'user_id'=>$user_id,
        ]);

        $user->mark()->create([
            'hin'=>$req->hin,
            'eng'=>$req->eng,
            'math'=>$req->math,
            'sst'=>$req->sst,
            'sci'=>$req->sci,
            'user_id'=>$user_id,
        ]);

        return redirect()->route("insert");
    }
}
