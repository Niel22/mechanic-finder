<?php

namespace App\Livewire\User\Pages\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    public $name, $email, $phone_number, $street_address, $town_city, $state, $country = 'Nigeria', $picture, $password, $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'phone_number' => 'required|string|max:20',
        'street_address' => 'required|string|max:255',
        'town_city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'picture' => 'required|image|max:2048',
        'password' => 'required|min:6|confirmed',
    ];


    public function create(){

        $user = $this->validate();



        if($this->picture){
            $file = $this->picture;

            $fileName = time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('uploads/user/', $fileName, 'public');

            $user['picture'] = $fileName;

        }


        $registered = User::create($user);

        // dd($registered);

        Auth::guard('web')->login($registered);

        $this->redirectRoute('user.home');


    }
    public function render()
    {
        return view('livewire.user.pages.auth.register');
    }
}
