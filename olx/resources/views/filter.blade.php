@extends("base")

@section("content")
    <div class="container mt-5 pt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($pro as $item)
                        <div class="col-3 mb-2">
                            <div class="card">
                               <img src="{{asset('products/'.$item->image)}}" alt="" class="card-img-top mx-auto" style="width:70%;object-fit:cover;height:150px;">
                                <div class="card-body">
                                    <h4 class="h5">Rs. {{$item->price}}/-</h4>
                                    <h6 class="text-truncate">{{$item->pro_title}}</h6>
                                    <a href="{{route('view',['itemid'=>$item->id,"catId"=>$item->category_id])}}" class="nav-link stretched-link">Know more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-10 mt-3 mx-auto">
                        {{$pro->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
