@extends("base")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mx-auto">
                <form action="{{route('update',['id'=>$data->id])}}" method="post">
                    @csrf
                    {{$data->id}}
                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" value="{{$data->name}}" name="name" class="form-control">
                        @error("name")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Contact</label>
                        <input type="text" value="{{$data->contact}}" name="contact" class="form-control">
                        @error("contact")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="update record" class="btn btn-danger w-100">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
