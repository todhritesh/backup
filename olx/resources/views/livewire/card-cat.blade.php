<div>
    <div class="card ">
        <div class="card-header">{{$category->title}}</div>
        <div class="card-body">
            <ul>
                @foreach ($category->child as $item)

                <li class=""><a href="{{route('filter',['id'=>$item->id])}}" >{{$item->title}}</a></li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
