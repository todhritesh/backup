@extends("base")
@section("content")
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Title</label>
                                <input type="text" name="title" value="{{old('title')}}" class="form-control">
                                @error('title')
                                    <div class="text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">price</label>
                                <input type="text" name="price" value="{{old('price')}}" class="form-control">
                                @error('price')
                                    <div class="text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">seller_name</label>
                                <input type="text" name="seller_name" value="{{old('seller_name')}}" class="form-control">
                                @error('seller_name')
                                    <div class="text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">seller_contact</label>
                                <input type="text" name="seller_contact" value="{{old('seller_contact')}}" class="form-control">
                                @error('title')
                                    <div class="text-danger small">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">address</label>
                                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">city</label>
                                <input type="text" name="city" value="{{old('city')}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select name="category" class="form-select" id="">
                                    @foreach ($cat as $c)
                                @php
                                    if($c->parent_id == 0 ){
                                        $flag = 1;
                                    }else{
                                        $flag = 0;
                                    }
                                @endphp
                                    <option value="{{$c->id}}" <?=($flag == 1)? "disabled" : "" ?>>{{$c->title}}</option>
                                    @endforeach
                                </select>
                                <a href="#modal" data-bs-toggle="modal" class="nav-link">Create category</a>


                            </div>
                            <div class="mb-3">
                                <label  class="form-label">description</label>
                                <textarea name="description" class="form-control" cols="30" rows="10">{{old('description')}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">image</label>
                                <input type="file" name="image" value="{{old('image')}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{route("insertCat")}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label  class="form-label">Main Category </label>
                            <select name="parent" class='form-control'>
                                <option value="0">Select main category</option>
                                @foreach ($main as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Category title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
