@extends('admin.base')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-8">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td>{{$product->title}}</td>
                    </tr>
                    <tr>
                        <th>descount_price</th>
                        <td>{{$product->discount_price}}</td>
                    </tr>
                    <tr>
                        <th>price</th>
                        <td>{{$product->price}}</td>
                    </tr>
                    <tr>
                        <th>brand</th>
                        <td>{{$product->brand}}</td>
                    </tr>
                    <tr>
                        <th>descr</th>
                        <td>{{$product->descr}}</td>
                    </tr>
                    <tr>
                        <th>category_id</th>
                        <td>{{$product->cat_title}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-4  mx-auto my-auto">
                <div class="row">
                    <img src="{{asset("products/".$product->img1)}}" alt="" class="card-img-top">
                </div>
            </div>
        </div>
    </div>
@endsection
