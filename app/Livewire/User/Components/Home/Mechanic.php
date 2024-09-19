<?php

namespace App\Livewire\User\Components\Home;

use App\Models\Mechanic as ModelsMechanic;
use Livewire\Component;

class Mechanic extends Component
{
    public function render()
    {
        return view('livewire.user.components.home.mechanic', [
            'mechanics' => ModelsMechanic::all()
        ]);
    }
}
