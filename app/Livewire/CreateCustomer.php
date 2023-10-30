<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\Title;

#[Title('Create Costumer')]

class CreateCustomer extends Component
{

    public $name = '';
    public $birthDate = '';
    public $email = '';
    public $phone = '';
    public $address = '';
    public $city = '';
    public $state = '';
    public $zip = '';
    public $barcode = '';

    public function save()
    {
        $validated=$this->validate([
            'name'=>'required|max:255',
            'birthDate'=>'required',
            'email'=>'required|email|unique:customers',
            'phone'=>'required|unique:customers',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'barcode'=>'required|unique:customers'
        ]);

        Customer::create($validated);
        session()->flash('success', 'Customer Created Sucessfully');
        return $this->redirect('/customers', navigate:true);
    }
    
    public function render()
    {
        return view('livewire.create-customer');
    }
}
