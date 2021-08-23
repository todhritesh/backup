@extends("base")


@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @livewire("create")
            </div>

            <div class="col-lg-9">
                <livewire:search/>
            </div>
        </div>
    </div>
@endsection
