<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class ManageStudents extends Component
{
    public $search = '';

    function delete($id){
        User::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.manage-students',["students"=> User::where("name","LIKE","%$this->search%")->get()]);
    }
}
