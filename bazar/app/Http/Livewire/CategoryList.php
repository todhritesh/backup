<?php

namespace App\Http\Livewire;

use App\Models\Category;

use Livewire\Component;

class CategoryList extends Component
{
    public $category;

    public function mount(){
        $this->category = Category::all();
    }
    public function render()
    {
        return <<<'blade'
            <div>
                <div class="list-group">
                    @foreach($category as $cat)
                        <a href="" class="list-group-item list-group-item-action">{{$cat->title}}</a>
                    @endforeach
                </div>
            </div>
        blade;
    }
}
