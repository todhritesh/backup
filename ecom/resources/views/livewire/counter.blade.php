<div style="text-align:center" class="card">
    <div class="card-body">
        <button type="button" wire:click="plus" class="btn btn-success">+</button>
        @if($count>0)
            <button type="button" wire:click="minus" class="btn btn-danger">-</button>
        @endif
        <h1>{{$count}}</h1>
    </div>
</div>
