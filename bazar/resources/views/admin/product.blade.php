@extends("admin.base")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <blockquote class="blockquote">Manage Product</blockquote>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Discounted Price</th>
                    <th>Category</th>
                    <th>Image</th>
                </tr>

                @foreach ($products as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->p_title}}</td>
                        <td>{{$item->brand}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->discount_price}}</td>
                        <td>{{$item->category->title}}</td>
                        <td>{{$item->image}}</td>

                        <td>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" >Action</button>

                            <div class="dropdown-menu">
                                <a href="" class="dropdown-item"><i class="bi bi-pencil-square"></i> Edit</a>
                                <a href="" class="dropdown-item"><i class="bi bi-eye"></i> View</a>
                                <form action="{{route("admin.product.delete",["id"=>$item->id])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <input type="hidden">
                                    <button type="submit" class="dropdown-item"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
