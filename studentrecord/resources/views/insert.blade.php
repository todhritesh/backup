@extends('base')

@section('title', "insert page")
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <form action="" method="POST">
                    @csrf
        
                    <div class="card border border-info mt-3">
                        <div class="card-header bg-info text-white">User Details</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                @error('name')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" value="{{old('email')}}" class="form-control">
                                @error('email')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
        
                    <div class="card mt-4 border border-primary">
                        <div class="card-header bg-primary text-white">Students Details</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="">School Name</label>
                                    <input type="text" name="school" value="{{old('school')}}" class="form-control">
                                    @error('school')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="">contact</label>
                                    <input type="text" name="contact" value="{{old('contact')}}" class="form-control">
                                    @error('contact')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                           <div class="row">
                            <div class="mb-3 col-6">
                                <label for="">address</label>
                                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                                @error('address')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-6">
                                <label for="">roll_code</label>
                                <input type="text" name="roll_code" value="{{old('roll_code')}}" class="form-control">
                                @error('roll_code')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                           </div>
                        </div>
                    </div>
        
                    <div class="card my-4 border border-success">
                        <div class="card-header bg-success text-white">Marks Details</div>
                        <div class="card-body">
                            <div class="row g-1">
                                <div class="mb-3 col">
                                    <label for="">maths</label>
                                    <input type="text" name="maths" value="{{old('maths')}}" class="form-control">
                                    @error('maths')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                              
                                <div class="mb-3 col">
                                    <label for="">sst</label>
                                    <input type="text" name="sst" value="{{old('sst')}}" class="form-control">
                                    @error('sst')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">hindi</label>
                                    <input type="text" name="hindi" value="{{old('hindi')}}" class="form-control">
                                    @error('hindi')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">eng</label>
                                    <input type="text" name="eng" value="{{old('eng')}}" class="form-control">
                                    @error('eng')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 col">
                                    <label for="">sci</label>
                                    <input type="text" name="sci" value="{{old('sci')}}" class="form-control">
                                    @error('sci')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <input type="submit" value="Create Student Record" class="btn btn-success btn-lg w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection