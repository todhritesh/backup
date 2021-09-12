<?php

namespace App\Http\Livewire;
use App\Models\User;

use Livewire\Component;

class AddStudent extends Component
{
    public $name,$aadhaar,$email,$password,$rfcode;

    public $rules=[
        'name'=>'required',
        'email'=>'required',
        'aadhaar'=>'required',
        'password'=>'required',
        'rfcode'=>'required',
    ];
    public function clear(){
        $this->name = $this->aadhaar = $this->email = $this->password = $this->rfcode = "";
    }
    public function save(){
        $data = $this->validate();
        User::create($data);
        $this->clear();

    }
    public function render()
    {
        return view('livewire.add-student');
    }
}
