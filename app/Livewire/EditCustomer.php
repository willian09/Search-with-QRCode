<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\Title;

#[Title('Edit Costumers')]

class EditCustomer extends Component
{

    public $customer;
    public $name;
    public $birthDate;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $state;
    public $zip;
    public $barcode;

    public function mount(Customer $customer)
    {
        $this->customer=$customer;
        $this->name=$customer->name;
        $this->birthDate=$customer->birthDate;
        $this->email=$customer->email;
        $this->phone=$customer->phone;
        $this->address=$customer->address;
        $this->city=$customer->city;
        $this->state=$customer->state;
        $this->zip=$customer->zip;
        $this->barcode=$customer->barcode;
    }

    public function updateCustomer()
    {
        $validated=$this->validate([
            'name'=>'required|max:255',
            'birthDate'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'barcode'=>'required'
        ]);

        $this->customer->update($validated);
        session()->flash('success', 'Customer Updated Sucessfully');
        return $this->redirect('/customers', navigate:true);
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }
}
