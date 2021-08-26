@extends("admin.base")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto p-3 border border-4 border-dark my-2 alert-secondary">
                <form action="{{route("admin.product.insert")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="p_title" class="form-control">
                        @error("p_title")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">price</label>
                        <input type="text" name="price" class="form-control">
                        @error("price")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">brand</label>
                        <input type="text" name="brand" class="form-control">
                        @error("brand")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">discount_price</label>
                        <input type="text" name="discount_price" class="form-control">
                        @error("discount_price")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" id="" class="form-select">
                            @foreach ($categories as $cat)
                                <option class="form-control" value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                        </select>
                        <a href="{{route("admin.category.insert")}}" data-bs-toggle="modal" data-bs-target="#insert">Add new category</a>


                        @error("category_id")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                        @error("image")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
                        @error("description")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="">
                        <input type="submit" value="Add Product" class="w-50 btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="insert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{route("admin.category.insert")}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="title">
                            <input type="submit" value="Add Category" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
