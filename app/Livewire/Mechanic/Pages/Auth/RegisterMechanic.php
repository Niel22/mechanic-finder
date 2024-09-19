<?php

namespace App\Livewire\Mechanic\Pages\Auth;

use App\Models\Mechanic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;


class RegisterMechanic extends Component
{
    use WithFileUploads;

    public $shop_name, $username, $email, $phone_number, $whatsapp_number, $street_address, $town_city, $state, $country = 'Nigeria', $years_of_experience, $services_offered, $working_hours_from, $working_hours_to, $logo, $about, $password, $password_confirmation;

    protected $rules = [
        'shop_name' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:mechanics',
        'phone_number' => 'required|string|max:20',
        'whatsapp_number' => 'nullable|string|max:20',
        'street_address' => 'required|string|max:255',
        'town_city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'country' => 'required|string|max:255',
        'years_of_experience' => 'required|string|max:10',
        'services_offered' => 'required|string',
        'working_hours_from' => 'required|date_format:H:i',
        'working_hours_to' => 'required|date_format:H:i',
        'logo' => 'required|image|max:2048',
        'about' => 'required|string',
        'password' => 'required|min:6|confirmed',
    ];


    public function create(){

        $mechanic = $this->validate();

        $mechanic['password'] = bcrypt($mechanic['password']);

        // dd($mechanic);


        if($this->logo){
            $file = $this->logo;

            $fileName = time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('uploads/mechanic/', $fileName, 'public');

            $mechanic['logo'] = $fileName;

        }


        $registered = Mechanic::create($mechanic);

        // dd($registered);

        Auth::guard('mechanic')->login($registered);

        $this->redirectRoute('mechanic.home');


    }

    public function render()
    {
        return view('livewire.mechanic.pages.auth.register-mechanic');
    }
}
