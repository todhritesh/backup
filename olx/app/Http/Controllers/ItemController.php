<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class ItemController extends Controller
{
    public function index(){
        $data = ['cat'=>Category::all(),'product'=>Item::all()];
        return view("home",$data);
    }


    public function filter(Request $req , $id){
        return view("filter",["pro"=>Item::where("category_id",$id)->paginate(25)]);
    }


    public function view($itemid, $catId){
        return view("single",[
            "item"=>Item::find($itemid),
            "pro"=>Item::where("id","!=",$itemid)->where("category_id",$catId)->get()
        ]);
    }



    function search(Request $req){
        if($req->search != ""):
            return view("filter",["pro"=>Item::where("pro_title","LIKE","%$req->search%")->paginate()]);
        else:
            return redirect()->route("home");
        endif;
        }

    function insert(Request $req){
        if($req->method()=="POST"){
            $req->validate([

            ]);

            //insertion work
            $filename = $req->image->getClientOriginalName();
            $req->image->move(public_path("products"),$filename);
            $i = new item();
            $i->pro_title = $req->title;
            $i->price = $req->price;
            $i->seller_name = $req->seller_name;
            $i->seller_contact = $req->seller_contact;
            $i->category_id = $req->category;
            $i->address = $req->address;
            $i->city = $req->city;
            $i->description = $req->description;
            $i->image = $filename;
            $i->save();

            return redirect()->route("home");
        }

        return view("insertItem",[
            // "cat"=>Category::all(),
            "cat"=>Category::where("parent_id","!=","0")->get(),
            "main"=>Category::where("parent_id",0)->get()
    ]);
    }

    public function insertCat(Request $req){
        $req->validate([
            "title"=>"required"
        ]);
        $c = new Category();
        $c->title = $req->title;
        $c->parent_id = $req->parent;
        $c->save();

        return redirect()->back();
    }

    public function register(Request $req){

        if($req->method()=="POST"){
            $u = new User();
            $u->name = $req->name;
            $u->email = $req->email;
            $u->password = Hash::make($req->password);

            $u->save();

            return redirect()->route("login");
        }
        return view("register");
    }

    public function login(Request $req){
        if($req->method()=="POST"){
            $user = User::where("email",$req->email)->first();

            if(!$user || !Hash::check($req->password,$user->password)){
                return "<script>alert('error : rmail or password wrong')</script>";
            }

            else{
                //storing session
                $req->session()->put("login",$req->email);
                //redirecting home page
                return redirect()->route("insert");
            }

        }
        return view("login");
    }



    public function logout(Request $req){
        $req->session()->flush();
        return redirect()->route("home");
    }
}
