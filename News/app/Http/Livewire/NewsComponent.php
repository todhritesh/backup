<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewsComponent extends Component
{
    public $msg;
    public function render()
    {
        return view('livewire.news-component');
    }
}
