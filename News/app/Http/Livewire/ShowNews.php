<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowNews extends Component
{
    public $post;
    public $cid;

    public function mount(){
        $this->post = Post::where("city_id",$this->cid)->get();
    }
    public function render()
    {
        return view('livewire.show-news');
    }
}
