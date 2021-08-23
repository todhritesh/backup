<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $data = DB::table("students")->get();
        return view("home",["show"=>$data]);
    }

    public function store(Request $req){
        $store = DB::table("students")->insert([
            "name"=>$req->name,
            "email" => $req->email,
            "contact"=>$req->contact
        ]);
        return redirect()->back();
    }

    public function update($id){
        $edit = DB::table("students")->find($id);
        return view("update",["data"=>$edit]);
    }

    public function modify(Request $req,$id){
        $modify = DB::table("students")->where("id",$id)->update([
            "name"=>$req->name,
            "email"=>$req->email,
            "contact"=>$req->contact
        ]);
        return redirect()->route("home");
    }
    public function delete($id){
        $delete = DB::table("students")->where("id",$id)->delete();
        return redirect()->route("home");
    }

}
