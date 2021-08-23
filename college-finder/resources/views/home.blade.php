@extends('base')

@section("title")
    homepage
@endsection


@section("content")
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="" class="list-group-item list-group-item-action active">Categories</a>
                    @foreach ($data as $cat)
                    <a href="" class="list-group-item list-group-item-action">{{$cat->title}}</a>

                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
