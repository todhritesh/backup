<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\college;

class CollegeController extends Controller
{
    function index(){
        $data = category::all();
        return view("home",["data"=>$data]);
    }

    public function form(){
        $cat = Category::all();
        return view("insert",["cat"=>$cat]);
    }

    function insertCategory(Request $req){
        $cat = new Category();
        $cat->title = $req->title;
        $cat->save();

        return redirect()->back();
    }

function insertCollege(Request $req){

    $req->validate([
        "c_title" => "required",
        "contact" => "required",
        "email" => "required",
        "descr" => "required",
        "logo" => "required",
        "category" => "required",
    ]);

    $logo = $req->file("logo")->getClientOriginalName();
    $path = $req->file("logo")->storeAs("public/",$logo);
    $c = new College();
    $c->c_title = $req->c_title;
    $c->contact = $req->contact;
    $c->email = $req->email;
    $c->descr = $req->descr;
    $c->logo = $logo;
    $c->estd = $req->estd;
    $c->category_id = $req->category;
    $c->save();

    return redirect()->back();

}


function deleteCategory($id){
    $c = Category::find($id);
    $c->delete();
    return redirect()->back();
}


function deleteCollege($id){
    $c = College::find($id);
    $c->delete();
    return redirect()->back();
}


}
