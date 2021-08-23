<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post;

class PostForm extends Component
{

    public $title;
    public $content;
    public $posts;

    public $rules=[
        "title"=>"required|min:5",
        "content"=>"required",
    ];

    public function mount(){
        $this->posts=Post::all();
    }

    public function updated($p){
         $this->validateOnly($p);
    }

    public function save(){
        $data = $this->validate();

        Post::create($data);
        $this->mount();
        session()->flash("msg","Data inserted successfully");

        $this->title = "";
        $this->content = "";
    }

    public function deletePost($id){
        $p = Post::find($id)->delete();
        session()->flash("deletemsg","Deleted successfully");
        $this->mount();
    }


    public function render()
    {
        return view('livewire.post-form');
    }
}
