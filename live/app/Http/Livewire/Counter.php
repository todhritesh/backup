<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;
    function plus(){
        return $this->count++;
    }
    function minus(){
        if($this->count > 0){
            return $this->count--;
        }
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
