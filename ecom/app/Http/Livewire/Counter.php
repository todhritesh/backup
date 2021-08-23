<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{   public $count = 0;
    public function plus(){
        return $this->count++;
    }
    public function minus(){
        return $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
