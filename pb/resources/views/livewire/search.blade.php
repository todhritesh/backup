<div>
    <input type="text" wire:model="search" class="form-control col-4">
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>

        @foreach ($data as $d )
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->contact}}</td>
                <td>
                    <a href="{{route("update",["id"=>$d->id])}}" class="btn btn-info">Edit</a>
                    <a href="{{route("delete",["id"=>$d->id])}}" class="btn btn-danger">X</a>
                </td>
            </tr>
        @endforeach
    </table>           
</div>
