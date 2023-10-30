<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\Title;

#[Title('View Customers')]

class ViewCustomer extends Component
{

    public $customer;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function increment()
    {
        $this->customer->amount++;
        $this->customer->save();
    }
 
    public function decrement()
{
    if ($this->customer->amount > 0) {
        $this->customer->amount--;
        $this->customer->save();
    } else {
        session()->flash('error', 'You drank all your beers. Buy more!');
    }
}

    public function render()
    {
        return view('livewire.view-customer');
    }
}
