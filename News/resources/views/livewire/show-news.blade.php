<div >
   @foreach ($post as $p)
        <div class="card mb-3">
            <div class="card-header alert-success">{{$p->title}}&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;{{$p->states->state}}-{{$p->city->city}}<span class="float-end">{{$p->created_at}}</span></div>
            <div class="card-body">
                <p>{{$p->news}}</p>
            </div>
        </div>
    @endforeach
</div>
