@extends("layout")

@section("title","Home")

@section("content")

<div class="container mt-2">
    <div class="row">
        <div class="col-3">
            <div class="list-group">
                @foreach ($states as $s)
                    <a href="" class="list-group-item list-group-item-action dropdown-toggle" data-bs-toggle="dropdown">{{$s->state}}</a>
                        <ul class="dropdown-menu">
                            @foreach($city as $c)
                                @if ($s->id==$c->state_id)
                                    <li><a href="{{route("citynews",["cityid"=>$c->id])}}" class="dropdown-item">{{$c->city}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                @endforeach
            </div>
        </div>

        <div class="col-9">
            <div class="row">
                <div class="col-10 mx-auto">
                    @if (isset($cityid))
                        @livewire("show-news",["cid"=>$cityid])
                    @else
                        <div class="col-10 mx-auto shadow-lg mt-5">
                            <div class="card alert-danger">
                                <div class="card-body">
                                    <div class="display-1 fw-bold text-success">
                                        Select News Region
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


