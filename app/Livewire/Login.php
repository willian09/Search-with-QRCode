<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;

#[Title('Login')]


class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function loginUser(Request $request)
    {
        $validated=$this->validate([
            'email'=>'required|max:255',
            'password'=>'required|max:255'
        ]);

        if(Auth::attempt($validated))
        {
            $request->session()->regenerate();
            return $this->redirect('/customers', navigate:true);
        }

        $this->addError('email', 'The password providerd does not match the email');
    }
}
