<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    public function home(){
        $data['categories'] = Category::where("parent_id",NULL)->get();
        $data['products'] = Product::all();
        return view("core.home-page",$data,);
    }

    public function search(Request $req){
        $data['categories'] = Category::where("parent_id",NULL)->get();
        if($req->method() == 'GET' && $req->search !=''){
            $search = $req->search;
            $data['products'] = Product::where('title','like',"%$search%")->get();
            return view('core.home-page',$data);
        }
        return redirect()->back();
    }

    public function add_to_cart(Request $req  , $id){
        $product = Product::find($id);
        $user = Auth::user();
        $cond = [["ordered"=>false],["user_id"]]
    }

    public function product_view(){
        return view("core.product-page");
    }

    public function checkout(){
        return view("core.checkout");
    }
}
