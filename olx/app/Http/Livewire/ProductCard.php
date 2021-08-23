<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public $pro;
    public function render()
    {
        return <<<'blade'
            <div>
                <div class="card">
                    <img src="{{asset('products/'.$pro->image)}}" alt="" class="card-img-top mx-auto" style="width:70%;object-fit:cover;height:150px;">
                    <div class="card-body">
                        <h4 class="h5">{{$pro->price}}</h4>
                        <h6 class="text-truncate">{{$pro->pro_title}}</h6>
                        <a href="" class="nav-link stretched-link">Know more</a>
                    </div>
                </div>
            </div>
        blade;
    }
}
