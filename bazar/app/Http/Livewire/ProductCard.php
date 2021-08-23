<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public $data;
    public function render()
    {
        return <<<'blade'

                <div class="card">
                    <img src="" class="card-img-top" style="object-fit:contain;height:200px;">
                    <div class="card-body">
                        <h2>{{$data->price}}</h2>
                        <h4 > {{$data->p_title}} </h4>
                        <p class="small">{{$data->category->title}}</p>
                    </div>
                </div>

        blade;
    }
}
