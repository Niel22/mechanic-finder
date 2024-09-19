<?php

namespace App\Livewire\Mechanic\Components\Home;

use App\Models\Mechanic as ModelsMechanic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Mechanic extends Component
{
    public function render()
    {
        return view('livewire.mechanic.components.home.mechanic', [
            'mechanics' => ModelsMechanic::where('state', Auth::guard('web')->user()->state)->where('town_city', Auth::guard('web')->user()->town_city)->get()
        ]);
    }
}
