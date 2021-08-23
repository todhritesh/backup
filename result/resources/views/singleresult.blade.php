@extends("layout")

@section("title","Insert")

@section("sidebar")
    <div class="col-3">
        <div class="list-group">
            <li class="list-group-item bg-dark bg-gradient text-light text-center h2">Actions</li>
            <a href="{{route('home')}}" class="list-group-item list-group-item-action text-center fw-bold list-group-item-success">View All</a>
            @foreach($lists as $l)
            <a href="{{route('result',['id'=>$l->id])}}" class="list-group-item list-group-item-action text-center fw-bold">{{$l->name}}</a>
            @endforeach
        </div>
    </div>
@endsection


@section("content")
    <div class="col-9 mt-3">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card shadow-lg">
                <div class="row h1 bg-primary text-light m-0 p-3">Result</div>
                    <div class="card-body shadow-lg">
                        <h3>Name : {{$result->name}}</h3>
                        <h3>Roll no. : {{$result->id}}</h3>
                        <h3>Email id : {{$result->email}}</h3>
                        <h3>Contact : {{$result->contact}}</h3>
                        <h3>Hindi : {{$result->mark->hin}}</h3>
                        <h3>English : {{$result->mark->eng}}</h3>
                        <h3>Maths : {{$result->mark->math}}</h3>
                        <h3>Science : {{$result->mark->sci}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection