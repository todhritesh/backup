<?php

namespace App\Http\Livewire;
use App\Models\Product;

use Livewire\Component;

class SearchInput extends Component
{
    public $data,$products;

    function mount(){
        $this->products = Product::where("p_title","like","%$this->data%")->get();
    }
    public function render()
    {
        return <<<'blade'
            <div class="mx-auto d-flex">
                <input type="text" placeholder="Search here" wire:model="data" size="50" id="" class="form-control">
                <button type="submit" class="btn btn-success">Go</button>
            </div>
        blade;
    }
}

