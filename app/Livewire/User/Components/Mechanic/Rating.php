<?php

namespace App\Livewire\User\Components\Mechanic;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Rating extends Component
{
    public $rate = '', $review, $id;

    protected $rules = [
        'review' => ['required', 'max:255']
    ];

    public function addrate($i){
        $this->rate = $i;
    }

    public function addreview($rate){
        if(isset($rate)){
            Review::create([
                'user_id' => Auth::guard('web')->id(),
                'reviews' => $this->validate()['review'],
                'rating' => $rate,
                'mechanic_id' => $this->id
            ]);

            $this->reset('review');
        }else{
            $this->addError('review', 'Rate the mechanic before submitting your comment');
        }
    }

    public function render()
    {
        return view('livewire.user.components.mechanic.rating', [
            'reviews' => Review::where('mechanic_id', $this->id)->get()
        ]);
    }
}
