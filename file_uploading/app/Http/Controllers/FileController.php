<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\file;

class FileController extends Controller
{
    function index(){
        $data = file::all();
        return view("home",["data"=>$data]);
    }

    public function store(Request $req){
        $req->validate([
            "file"=>"required"
        ]);

        $name = $req->file("file")->getClientOriginalName();

        $path = $req->file("file")->store("files");

        $a = new file();
        $a->name = $name;
        $a->caption="dog";
        $a->save();
    }
}
