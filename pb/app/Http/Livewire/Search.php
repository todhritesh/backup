<?php

namespace App\Http\Livewire;
use App\Models\Phone;
use Livewire\Component;

class Search extends Component
{
    public $search = "";
    public function render()
    {
        if($this->search!=""){
            $data = ["data"=>Phone::where("name",'LIKE',"%$this->search%")
            ->orWhere("id","$this->search")
            ->orWhere("contact","$this->search")->get()];
        }
        else{
            $data = ["data"=>Phone::all()];
        }
        return view('livewire.search',$data);

    }
}
