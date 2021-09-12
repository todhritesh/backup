<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class ManageOrders extends Component
{
    public $orders,$search = "";

    public function mount(){
        $this->orders = Order::where("ordered",false)->get();
    }

    public function render()
    {
        return view('livewire.manage-orders');
    }
}
