<?php

namespace App\Livewire\User\Pages\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => ['required'],
        'password' => ['required']
    ];

    public function login(){
        $mechanic = $this->validate();

        if(Auth::guard('web')->attempt($mechanic)){
            session()->regenerate();

            $this->redirectIntended('/');
        }else{
            $this->addError('email', 'Invalid email or password');
        }
    }
    public function render()
    {
        return view('livewire.user.pages.auth.login');
    }
}
