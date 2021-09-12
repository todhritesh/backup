<div>
    @if (session()->has("msg"))
        <div class="alert alert-success alert-dismissible fade show">
            <h4 class="">{{session("msg")}}</h4>
            <button type="button" data-bs-dismiss='alert' class="btn-close"></button>
        </div>
    @endif
    <h2 class="alert-secondary py-3 ps-2">Add News</h2>
    <form action="" method="post" wire:submit.prevent="save">
        @csrf
        <div class="mb-3">
            <label class="form-label">News Title</label>
            <input type="text" name="title" value="{{old('title')}}" wire:model = "title" class="form-control">
            @error('title')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Select State</label>
            <select wire:model="state_id"  class="form-select" name="state_id">
                <option value="" class="form-control" selected >Select State</option>
                @foreach ($state as $s)
                    <option value="{{$s->id}}" class="form-control">{{$s->state}}</option>
                @endforeach
            </select>
            @error('state_id')
                <p class="text-danger small">{{$message}}</p>
            @enderror
            {{$state_id}}
        </div>

        <div class="mb-3">
            <label  class="form-label">Select City</label>
            <select  class="form-select" name="city_id" wire:model="city_id">
                <option value="" class="form-control" selected disabled>Select City</option>
                @if ($state_id>0)
                    @foreach ($city as $c)
                        <option value="{{$c->id}}" class="form-control">{{$c->city}}</option>
                    @endforeach
                @endif
                </select>
                {{$city_id}}
                @error('city_id')
                    <p class="text-danger small">{{$message}}</p>
                @enderror
            </div>

        <div class="mb-3">
            <label class="form-label">Write News</label>
            <textarea name="news" class="form-control" id="" wire:model="news" cols="30" rows="5">{{old('news')}}</textarea>
            @error('news')
                <p class="text-danger small">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <input type="submit" value="Post News" class="btn btn-success">
        </div>

    </form>
</div>
