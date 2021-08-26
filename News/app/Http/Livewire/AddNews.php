<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\City;

class AddNews extends Component
{

    public $selected_city=null ;
    public $selectedState=null;
    public $selected;
    public $state,$city;
    public $state_id;

    public function mount(){
        $this->state = State::all();
    }



    public function ss($id){
        $this->selected = 1;
        $this->city = City::where("state_id",$id)->get();
    }
    public function render()
    {
        return view('livewire.add-news');
    }

    public function updatedSelectedState($state_id){
        $this->city = City::where("state_id",$state_id)->get();
    }
}
