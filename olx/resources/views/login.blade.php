@extends('base')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h6>Create an account</h6>
                        <form action="{{route("login")}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Submit" class=" btn btn-outline-dark w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
