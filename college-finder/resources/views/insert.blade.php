@extends("base")

@section("title")
Insert
@endsection


@section("content")
    <div class="container">
        <div class="row mt-3">
            <div class="col-3">
                <form action="{{route("saveCategory")}}" method="post" class="border-end border-5 border-secondary pe-5 ">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Category Title</label>
                        <input type="text" name="title" value="{{old("title")}}" class="form-control">
                        @error("title")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success w-50">
                    </div>
                </form>
            </div>

            <div class="col-7 mx-auto">
                <form action="{{route("saveCollege")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">College Name</label>
                        <input type="text" name="c_title" value="{{old("c_title")}}" class="form-control">
                        @error('c_title')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contact</label>
                        <input type="text" name="contact" value="{{old("contact")}}" class="form-control">
                        @error('contact')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-select">
                            @foreach ($cat as $c)
                                <option value="{{$c->id}}">{{$c->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{old("email")}}" class="form-control">
                        @error('email')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Logo</label>
                        <input type="file" name="logo" value="{{old("logo")}}" class="form-control">
                        @error('logo')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estd</label>
                        <input type="text" name="estd" value="{{old("estd")}}" class="form-control">
                        @error('estd')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="descr" class="form-control">{{old("descr")}}</textarea>
                        @error('descr')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Save" class="btn btn-success w-50">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
