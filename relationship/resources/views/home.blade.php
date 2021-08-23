@extends("base")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route("store")}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">contact</label>
                                <input type="text" name="contact" id="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Submit" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($show as $d)
                        <tr>
                            <th>{{$d->id}}</th>
                            <th>{{$d->name}}</th>
                            <th>{{$d->email}}</th>
                            <th>{{$d->contact}}</th>
                            <th><a href="{{route("delete",["id"=>$d->id])}}" class="btn btn-danger">Delete</a></th>
                            <th><a href="{{route("update",["id"=>$d->id])}}" class="btn btn-info">Edit</a></th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
