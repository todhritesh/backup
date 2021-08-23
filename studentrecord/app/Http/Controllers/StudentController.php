<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $data = ["users"=>User::all()];
        return view("homepage",$data);
    }

    public function insertForm(){
        return view("insert");
    }

    public function storeData(Request $req){
        $req->validate([
                'name' => 'required',
                'email' => 'required',
                'school' => 'required',
                'roll_code' => 'required',
                'address' => 'required',
                'contact' => 'required',
                'maths' => 'required',
                'sci' => 'required',
                'sst' => 'required',
                'hindi' => 'required',
                'eng' => 'required',
        ]);


        //insertion

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = "1234";
        $user->save();

        $id = $user->id;
        $user->student()->create([
            'address'=>$req->address,
            "roll_code" => $req->roll_code, 
            "contact"=> $req->contact,
            "school"=>$req->school,
            "user_id"=>$id]);

        $user->marks()->create([
            "user_id"=>$id,
            "maths"=>$req->maths,
            "hindi" => $req->hindi, 
            "eng" => $req->eng, 
            "sst"=> $req->sst,
            "sci"=>$req->sci]);

        return "ya hoooooooooooooooooooooooooo";
    }
}
