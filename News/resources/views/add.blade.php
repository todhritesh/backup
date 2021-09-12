@extends("layout")

@section("title","Add City | State")

@section("content")

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="row mb-5">
                    @livewire("add-state")
                </div>

                <div class="row">
                    @livewire("add-city")
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
