<div>
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" wire:model="name" value="{{old("name")}}" name="name" class="form-control">
        @error("name")
            <p class="text-danger small">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label  class="form-label">Contact</label>
        <input type="text" wire:model="contact" value="{{old("contact")}}" name="contact" class="form-control">
        @error("contact")
            <p class="text-danger small">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <input type="submit" wire:click="store()" class="btn btn-danger w-100">
    </div>
</div>
