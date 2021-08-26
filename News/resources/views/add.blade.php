@extends("layout")

@section("title","Add City | State")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <form action="{{route("addstate")}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">State</label>
                            <input type="text" name="state" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit"  class="btn btn-success" value="Save ">
                        </div>
                    </form>
                </div>

                <div class="row">
                    <form action="{{route("addcity")}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <select name="state_id" id="" class="form-select">
                                <option  class="form-control" disabled selected>Select state</option>
                                @foreach ($states as $s)
                                    <option value="{{$s->id}}" class="form-control">{{$s->state}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit"  class="btn btn-success" value="Save ">
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    @livewire("add-news")
                </div>
            </div>
        </div>
    </div>

@endsection
