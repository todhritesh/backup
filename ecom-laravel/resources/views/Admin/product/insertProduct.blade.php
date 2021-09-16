@extends('admin.base')

@section('content')

    <div class="container">
        <div class="row">
            <form action="" method="Post">
                @csrf
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Discount Price</label>
                    <input type="text" name="discount_price" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Product Price</label>
                    <input type="text" name="pro_price" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
            </form>
        </div>
    </div>

@endsection
