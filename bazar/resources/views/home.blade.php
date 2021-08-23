@extends("layout")

@section("content")
    <div class="container">
        <div class="row mt-2">
            <div class="col-3">
                @livewire("category-list")
            </div>
            <div class="col-9 ">
                    @livewire("products")
            </div>
        </div>
    </div>
@endsection
