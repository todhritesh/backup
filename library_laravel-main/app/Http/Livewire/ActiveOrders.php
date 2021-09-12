<?php

namespace App\Http\Livewire;
use App\Models\Order;
use Livewire\Component;

class ActiveOrders extends Component
{

    public $orders,$search = "";

    public function mount(){
        $this->orders = Order::where("ordered",true)->get();
    }
    public function render()
    {
        return view('livewire.active-orders');
    }
}
