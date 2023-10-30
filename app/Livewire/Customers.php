<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\Title;

#[Title('Costumers')]

class Customers extends Component
{
    public $search = '';

    public function searchByBarcode()
    {
        $customer = Customer::where('barcode', $this->search)->first();

        if ($customer) {
            return redirect()->to('/customers/' . $customer->id);
        } else {
            session()->flash('error', 'Customer not found');
        }
    }

    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();
        session()->flash('success', 'Customer Deleted Sucessfully');
        return $this->redirect('/customers', navigate: true);
    }

    public function render()
    {
        $customers = $this->search
        ? Customer::where('barcode', 'like', '%' . $this->search . '%')->get()
        : Customer::all();

    return view('livewire.customers', [
        'customers' => $customers,
    ]);
    }
}
