<div>
    <div class="container">
        <div class="row">
            @foreach ($pro as $p)

            <div class="col-lg-3">
                @livewire("product-card",['pro'=>$p])
            </div>
            @endforeach
        </div>
    </div>
</div>
