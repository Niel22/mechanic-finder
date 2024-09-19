<?php

namespace App\Livewire\Mechanic\Components\Mechanic;

use App\Models\Review;
use Livewire\Component;

class Rating extends Component
{
    public $id;

    public function render()
    {
        return view('livewire.mechanic.components.mechanic.rating', [
            'reviews' => Review::where('mechanic_id', $this->id)->get()
        ]);
    }
}
