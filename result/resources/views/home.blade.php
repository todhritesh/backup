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
    <div class="col-9">
        <table class="table">
            <tr>
                <th>Roll no.</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>English</th>
                <th>Hindi</th>
                <th>Science</th>
                <th>Maths</th>
            </tr>

            @foreach($lists as $l)
            <tr>
                <td class="h5">{{$l->id}}</td>
                <td class="h6">{{$l->name}}</td>
                <td class="h6">{{$l->contact}}</td>
                <td class="h6">{{$l->email}}</td>
                <td class="h6">{{$l->mark->eng}}</td>
                <td class="h6">{{$l->mark->hin}}</td>
                <td class="h6">{{$l->mark->sci}}</td>
                <td class="h6">{{$l->mark->math}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection