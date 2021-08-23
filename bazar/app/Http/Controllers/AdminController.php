<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Product;
class AdminController extends Controller
{
    public function index(){
        return view("admin.dashboard");
    }
    public function insertProduct(Request $r){
        if($r->method()=="POST"){
            $validateData=$r->validate([
                "p_title"=>"required",
                "brand"=>"required",
                "price"=>"required",
                "discount_price"=>"required",
                "description"=>"required",
                "category_id"=>"required",
                "image"=>"required",
            ]);

            $filename = $r->image->getClientOriginalName();
            $r->image->move(public_path("photos"),$filename);

            $p = new Product();
            $p->p_title = $r->p_title;
            $p->price = $r->price;
            $p->brand = $r->brand;
            $p->discount_price = $r->discount_price;
            $p->category_id = $r->category_id;
            $p->description = $r->description;

            $p->image = $filename;
            $p->save();

            return redirect()->back();
        }
        return view("admin.insertProduct",["categories"=>Category::all()]);
    }

    public function deleteProduct($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
    public function insertCategory(Request $r){
        $data = $r->validate([
            "title"=>"required"
        ]);

        Category::create($data);

        return redirect()->back();
    }

    public function deleteCategory($id){
        Category::find($id)->delete();
        return redirect()->back();
    }
    public function product(){
        return view("admin.product",["products"=>Product::all()]);
    }
    public function category(){
        return view("admin.categories",["categories"=>category::all()]);
    }
    public function orders(){

    }
    public function address(){

    }
    public function coupon(){

    }
    public function users(){

    }
}
