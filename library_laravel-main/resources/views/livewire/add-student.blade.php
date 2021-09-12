<div>
    <form action="" method='post' wire:submit.prevent='save'>
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" wire:model='name' name='name' class="form-control">
            @error('name')
                <p class="small text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">email</label>
            <input type="text" wire:model='email' name='email' class="form-control">
            @error('email')
            <p class="small text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">aadhaar</label>
            <input type="text" wire:model='aadhaar' name='aadhaar' class="form-control">
            @error('aadhaar')
            <p class="small text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">password</label>
            <input type="password" wire:model='password' name='password' class="form-control">
            @error('password')
            <p class="small text-danger">{{$message}}</p>
        @enderror
        </div>
        <div class="mb-3">
            <label for="">rfcode</label>
            <input type="rfcode" wire:model='rfcode' name='rfcode' class="form-control">
            @error('rfcode')
            <p class="small text-danger">{{$message}}</p>
        @enderror
        </div>
        <div class="mb-3">
            <input type="submit" value="Add Student" class="btn btn-dark">
        </div>
    </form>
</div>
