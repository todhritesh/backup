<div>
    <form action="{{route("savenews")}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">News Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label  class="form-label">Select State</label>
            <select wire:model="selectedState" class="form-select" name="state_id">
                <option value="" class="form-control" selected >Select State</option>
                @foreach ($state as $s)
                    <option value="{{$s->id}}" class="form-control">{{$s->state}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label  class="form-label">Select City</label>
            <select  class="form-select" name="city_id">
                <option value="" class="form-control" selected disabled>Select City</option>
                @if ($selectedState>0)
                    @foreach ($city as $c)
                        <option value="{{$c->id}}" class="form-control">{{$c->city}}</option>
                    @endforeach
                    @endif
                </select>
            </div>

        <div class="mb-3">
            <label class="form-label">Write News</label>
            <textarea name="news" class="form-control" id="" cols="30" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <input type="submit" value="Post News" class="btn btn-success">
        </div>

    </form>
</div>
