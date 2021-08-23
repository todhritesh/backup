<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\mark;

class StudentController extends Controller
{
    public function insert_student(Request $req){
        $save_student = new Student();
        
        $save_marks = new mark();

        $save_student->name = $req->name;
        $save_student->contact = $req->contact;
        $save_student->email = $req->email;

        $save_student->save();

        $save_marks->eng = $req->english;
        $save_marks->hin = $req->hindi;
        $save_marks->sci = $req->science;
        $save_marks->math = $req->math;

        $save_student->mark()->save($save_marks);

        return redirect()->route("insert");
    }


    public function show_list(){
        $list = Student::all();
        return view("home",["lists"=>$list]);
    }

    public function show_single_result($id){
        $list = Student::all();
        $result = student::find($id);
        return view("singleresult",['lists'=>$list,'result'=>$result]);
    }
}
