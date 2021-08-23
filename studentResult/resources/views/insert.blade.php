@extends("base")

@section("title","Insert")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto small">
                <form action="{{route('store')}}" method="post">
                @csrf
                    <div class="card my-2">
                        <h3 class="card-header alert-success">User Details</h3>
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class=" form-control">
                                @error('name')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label class="form-label">email</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control">
                                @error('email')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                    </div>


                <div class="card my-2">
                    <h3 class="card-header alert-primary">Student Details</h3>
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="mb-2 col">
                                <label class="form-label">School</label>
                                <input type="text" name="school" value="{{old('school')}}" class="form-control">
                                @error('school')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-2 col">
                                <label class="form-label">Roll Code</label>
                                <input type="text" name="roll_code" value="{{old('roll_code')}}" class="form-control">
                                @error('roll_code')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-2 col">
                                <label class="form-label">Contact</label>
                                <input type="text" name="contact" value="{{old('contact')}}" class="form-control">
                                @error('contact')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card my--2">
                    <h3 class="card-header alert-success">Student Marrks</h3>
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="mb-2 col ">
                                <label class="form-label">English</label>
                                <input type="text" name="eng" value="{{old('eng')}}" class="form-control">
                                @error('eng')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-2 col ">
                                <label class="form-label">Maths</label>
                                <input type="text" name="math" value="{{old('math')}}" class="form-control">
                                @error('math')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-2 col ">
                                <label class="form-label">Science</label>
                                <input type="text" name="sci" value="{{old('sci')}}" class="form-control">
                                @error('sci')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-2 col ">
                                <label class="form-label">Hindi</label>
                                <input type="text" name="hin" value="{{old('hin')}}" class="form-control">
                                @error('hin')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-2 col ">
                                <label class="form-label">Sst</label>
                                <input type="text" name="sst" value="{{old('sst')}}" class="form-control">
                                @error('sst')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-2">
                    <input type="submit" value="Save Result" class="btn btn-outline-primary border border-4 fw-bold w-100">
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection
