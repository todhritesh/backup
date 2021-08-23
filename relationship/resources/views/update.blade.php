@extends("base")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{$data->name}}" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{$data->email}}" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">contact</label>
                            <input type="text" name="contact" value="{{$data->contact}}" id="" class="form-control">
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Submit" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
