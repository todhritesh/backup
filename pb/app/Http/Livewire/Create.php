<?php

namespace App\Http\Livewire;
use App\Models\Phone;


use Livewire\Component;

class Create extends Component
{
    public $name , $contact;

    public function resetInput(){
        $this->name=null;
        $this->contact=null;
    }

    public function store(){
        $this->validate([
            "name"=>"required",
            "contact"=>"required"
        ]);
        $p = new Phone();
        $p->name = $this->name;
        $p->contact = $this->contact;
        $p->save();
        $this->resetInput();
    }
    public function render()
    {
        return view('livewire.create');
    }
}
