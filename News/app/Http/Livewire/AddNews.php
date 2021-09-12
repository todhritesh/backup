<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\City;
use App\Models\Post;

class AddNews extends Component
{

    public $selected_city=null ;
    public $state,$city;
    public $state_id;

    public $city_id , $title , $news;

    public $rules=[
        "title"=>"required|min:5",
        "news"=>"required|min:20",
        "city_id"=>"required",
        "state_id"=>"required"
    ];

    public function save(){
        $data = $this->validate();
        Post::create($data);

        session()->flash("msg","News added successfully");

        $this->news="";
        $this->title="";
        $this->state_id="";
        $this->city_id="";
    }

    function updated($p){
        $this->validateOnly($p);
    }


    public function mount(){
        $this->state = State::all();
    }

    public function updatedStateId($state_id){
        $this->city = City::where("state_id",$state_id)->get();
    }


    public function render()
    {
        return view('livewire.add-news');
    }


}
