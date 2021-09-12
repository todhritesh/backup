<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\State;

class AddState extends Component
{
    public $state;
    public $rules=[
        "state"=>"required|min:1"
    ];

    function save(){
        $data = $this->validate();
        State::create($data);
        $this->state = '';
        session()->flash("msg","State inserted successfully");

    }

    public function updated($p){
        $this->validateOnly($p);
   }
    public function render()
    {
        return <<<'blade'
            <div>
            <h3 class="py-2 alert-secondary">
            Add State
        </h3>
        @if(session()->has('msg'))
            <div class='alert alert-success alert-dismissible fade show'>
                {{session('msg')}}
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="" method="post" wire:submit.prevent="save">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">State</label>
                        <input type="text" wire:model="state" name="state" value="{{old('state')}}" class="form-control">
                        @error("state")
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit"  class="btn btn-success" value="Save ">
                    </div>
                </form>
            </div>
        </div>
            </div>
        blade;
    }
}
