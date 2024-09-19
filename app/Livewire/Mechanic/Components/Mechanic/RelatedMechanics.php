<?php

namespace App\Livewire\Mechanic\Components\Mechanic;

use App\Models\Mechanic;
use Livewire\Component;

class RelatedMechanics extends Component
{
    public $id;

    public function render()
    {
        $mechanics = Mechanic::whereNot('id', $this->id)->get();
        return view('livewire.mechanic.components.mechanic.related-mechanics', [
            'mechanics' => $mechanics
        ]);
    }
}
