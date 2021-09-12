<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\State;

use Livewire\Component;

class AddCity extends Component
{
    public $state_id , $city;
    public $states;
    public $rules = [
        "state_id"=>'required',
        'city'=>'required|min:1'
    ];

    public function mount(){
        $this->states = State::all();
    }

    function save(){
        $data = $this->validate();
        City::create($data);

        session()->flash("msg","City added successfully");

        $this->state_id = "";
        $this->city = "";
    }

    function updated($p){
        $this->validateOnly($p);
    }

    public function render()
    {
        return <<<'blade'
            <div>
            <h2 class="alert-secondary py-2">Add City</h2>
            @if(session()->has('msg'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{session('msg')}}
                    <button type="button" data-bs-dismiss="alert" class="btn-close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" wire:submit.prevent='save'>
                        @csrf
                        <div class="mb-3">
                            <select name="state_id" wire:model='state_id' class="form-select">
                                <option  class="form-control" disabled selected>Select state</option>
                                @foreach ($states as $s)
                                    <option value="{{$s->id}}" class="form-control">{{$s->state}} </option>
                                @endforeach
                            </select>
                            @error('state_id')
                                <p class="text-danger samll">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" value="{{old('city')}}" wire:model='city' name="city" class="form-control">
                            @error('city')
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
