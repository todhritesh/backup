@extends("base")

@section("content")
    <div class="container mt-5 pt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header alert-danger h3">
                                Seller details
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">Seller Name</div>
                                    <div class="col">{{$item->seller_name}}</div>
                                </div>
                                <div class="row">
                                    <div class="col">Seller contact</div>
                                    <div class="col">{{$item->seller_contact}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{asset('products/'.$item->image)}}" alt="" class="card-img-top mx-auto" style="width:70%;object-fit:content;height:150px;">
                            </div>
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="h5">Rs. {{$item->price}}/-</h4>
                                        <h6 class="text-truncate">{{$item->pro_title}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header">
                                Product details
                            </div>
                            <div class="card-body">
                                <div class="text-muted">{{$item->description}}</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    <div class="container mt-5 pt-4">
        <div class="row">
            <div class="col-lg-12">
                Related Product ({{$pro->count()}})
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($pro as $item)
                        <div class="col-3 mb-2">
                            <div class="card">
                               <img src="{{asset('products/'.$item->image)}}" alt="" class="card-img-top mx-auto" style="width:70%;object-fit:contant;height:150px;">
                                <div class="card-body">
                                    <h4 class="h5">Rs. {{$item->price}}/-</h4>
                                    <h6 class="text-truncate">{{$item->pro_title}}</h6>
                                    <a href="{{route('view',['itemid'=>$item->id,"catId"=>$item->category_id])}}" class="nav-link stretched-link">Know more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
