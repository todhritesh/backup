<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserDetail extends Component
{
    public $user1;

    public function render()
    {
        return view('livewire.user-detail',["d1"=>$this->user1]);
    }
}
