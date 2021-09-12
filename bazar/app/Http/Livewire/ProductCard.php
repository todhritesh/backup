<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public $data;
    public function render()
    {
        return <<<'blade'

                <div class="card mb-3 shadow">
                    <img src="{{asset('photos/'.$data->image)}}" style="object-fit:contain;height:150px;">
                    <div class="card-body">
                    <h6 class="fw-bolder"> {{$data->p_title}} </h6>
                    <h6 class = "small fw-bold">₹ &nbsp{{$data->price}}<span class='small text-decoration-line-through ms-3 text-muted'>₹ &nbsp{{$data->discount_price}}</span></h6>
                        <p class="small">{{$data->category->title}}</p>
                    </div>
                </div>

        blade;
    }
}
