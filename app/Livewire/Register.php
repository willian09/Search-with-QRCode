<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;

#[Title('Register')]

class Register extends Component
{

    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser()
    {
        $validated=$this->validate([
            'name'=>'required|max:255',
            'email'=>'required|unique:users|max:255',
            'password'=>'required|min:8|max:255'
        ]);

        $user=User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt($this->password)
        ]);

        Auth::login($user);
        session()->flash('success', 'Registration succesful');
        return $this->redirect('/customers', navigate:true);
    }
}