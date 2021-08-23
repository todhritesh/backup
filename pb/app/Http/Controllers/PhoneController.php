<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    function index(){
        return view("home",['data'=>Phone::all()]);
    }
    function insert(Request $r ){
        $r->validate([
            'name'=>"required",
            "contact"=>"required | min:10 | max:10"
        ]);

        $p = new Phone();
        $p->name = $r->name;
        $p->contact = $r->contact;
        $p->save();

        return redirect()->back();

    }
    function delete($id){
        $p = Phone::find($id);
        $p->delete();
        return redirect()->back();
    }
    function update(Request $req , $id){
        $data = ["data"=>Phone::find($id)];
        if($req->method()=="POST"){
            echo "if k andr";
            $req->validate([
                'name'=>"required",
                "contact"=>"required | min:10 | max:10"
            ]);
            $p =  Phone::find($id);
        $p->name = $req->name;
        $p->contact = $req->contact;
        $p->save();

        return redirect()->route("home");

        }
        echo "if ke bahar";

        return view("update",$data);
    }
}
