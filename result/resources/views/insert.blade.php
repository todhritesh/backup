@extends("layout")

@section("title","Insert")

@section("sidebar")
<div class="col-8 mx-auto mt-3 fw-bold">
    <div class="card shadow-lg">
        <div class="card-body shadow-lg">
            <form action="{{route('insert_student')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Student Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                    @error('name')
                        <p class="text-danger fw-bold">{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control">
                    @error('email')
                        <p class="text-danger fw-bold">{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Contact</label>
                    <input type="number" name="contact" value="{{old('contact')}}" class="form-control">
                    @error('contact')
                        <p class="text-danger fw-bold">{$message}}</p>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">

                    <div class="mb-3">
                        <label  class="form-label">English</label>
                        <input type="text" name="english" value="{{old('english')}}" class="form-control">
                        @error('english')
                            <p class="text-danger fw-bold">{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Hindi</label>
                        <input type="text" name="hindi" value="{{old('hindi')}}" class="form-control">
                        @error('hindi')
                            <p class="text-danger fw-bold">{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Science</label>
                        <input type="text" name="science" value="{{old('science')}}" class="form-control">
                        @error('science')
                            <p class="text-danger fw-bold">{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Maths</label>
                        <input type="text" name="math" value="{{old('math')}}" class="form-control">
                        @error('math')
                            <p class="text-danger fw-bold">{$message}}</p>
                        @enderror
                    </div>

                </div>

                <div class="mb-3">
                    <input type="submit" value="Save" class="btn btn-outline-dark border border-dark border-4 fw-bold w-25">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection