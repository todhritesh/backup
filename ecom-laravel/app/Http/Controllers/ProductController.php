<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.product.products',[
            "products" => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.product.insertProduct",[
            "categories"=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required",
        ]);

        $file1= $request->img1->getClientOrigianlName();
        $file2= $request->img2->getClientOrigianlName();

        $request->img1->move(public_path("products"),$file1);
        $request->img2->move(public_path("products"),$file2);

        $p = new Product();
        $p->title = $request->title;
        $p->discount_price = $request->discount_price;
        $p->price = $request->price;
        $p->category_id = $request->category_id;
        $p->descr = $request->descr;
        $p->img1 = $request->iamge1;
        $p->img2 = $request->iamge2;

        $p->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("admin.product.showProduct",[
            'product'=>Product::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("Admin.product.editProduct",[
            "product"=>Product::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file1= $this->img1->getClientOrigianlName();
        $file2= $this->img2->getClientOrigianlName();

        $request->img1->move(public_path("products"),$file1);
        $request->img2->move(public_path("products"),$file2);

        $p = Product::find($id);
        $p->title = $request->title;
        $p->discount_price = $request->discount_price;
        $p->price = $request->price;
        $p->category_id = $request->category_id;
        $p->descr = $request->descr;
        $p->img1 = $request->iamge1;
        $p->img2 = $request->iamge2;

        $p->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Product::find($id)->delete();
        return redirect()->back();

    }
}
