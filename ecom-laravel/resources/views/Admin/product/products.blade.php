@extends('admin.base')

@section('content')

    <div class="conatiner">
        <div class="row">
            <a href="{{route('product.create')}}" class="btn btn-success">Add Button</a>
        </div>
    </div>

    <table class="table">
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Price</td>
            <td>Category</td>
            <td>Image</td>
            <td>Brand</td>
            <td>Action</td>
        </tr>

        @foreach ($products as $pro)
            <tr>
                <td>{{$pro->id}}</td>
                <td>{{$pro->title}}</td>
                <td>{{$pro->discount_price}} <del>{{$pro->price}}</del></td>
                <td>{{$pro->category}}</td>
                <td><img src="{{$pro->image}}" width='30px' alt=""></td>
                <td>
                    <a href="{{route('product.edit',["product"=>]$pro->id)}}" class="btn btn-suceess">Edit</a>
                    <a href="{{route('product.show')}}" class="btn btn-suceess">View</a>
                    <form action="{{route('product.destroy')}}" class="btn btn-suceess">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
