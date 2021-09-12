<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class ManageBook extends Component
{
    public $search ;

    function delete($id){
        Book::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.manage-book',["books"=> Book::where('title','LIKE',"%$this->search%")->get()]);
        // return view('livewire.manage-book',$this->books);
    }
}
