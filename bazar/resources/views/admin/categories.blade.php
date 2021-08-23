@extends("admin.base")

@section("content")
    <div class="container">
        <div class="row">
            <button class="btn btn-success col-3 mt-2 ms-auto" data-bs-toggle="modal" data-bs-target="#insert">Add</button>
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
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>

                @foreach ($categories as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>

                        <td>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Action</button>

                            <div class="dropdown-menu">
                                <a href="" class="dropdown-item">Edit</a>
                                <a href="" class="dropdown-item">View</a>
                                <form action="{{route("admin.category.delete",["id"=>$item->id])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <input type="hidden">
                                    <button type="submit" class="dropdown-item">Delete</button>
                                </form>
                             </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
