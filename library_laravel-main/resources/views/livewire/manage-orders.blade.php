<div>
    <div class="row">
        <div class="col-4 ms-auto mb-2">
            <input type="search" placeholder="search here by book title" name="search" wire:model="search" class="form-control">
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <tr>
            <th>#id</th>
            <th>user</th>
            <th>date</th>
            <th>email</th>
            <th>action</th>
        </tr>
    @foreach ($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->user_id}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->user->email}}</td>

            <td>
                <button type="button" class="btn btn-danger">X</button>
                <button type="button" class="btn btn-info">edit</button>
            </td>
        </tr>
    @endforeach
    </table>
</div>
