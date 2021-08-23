<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class Products extends Component
{
    public $products;

    public function mount(){
        $this->products = Product::all();
    }

    public function render()
    {
        return <<<'blade'
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-3">@livewire("product-card",["data"=>$product])</div>
                @endforeach
            </div>
        blade;
    }
}
