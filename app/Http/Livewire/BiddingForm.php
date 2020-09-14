<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Bid;

class BiddingForm extends Component
{
    public $rank = [];

    protected $rules = [
        'rank.1' => 'required|numeric|min:0|max:99',
        'rank.2' => 'required|numeric|min:0|max:99',
        'rank.3' => 'required|numeric|min:0|max:99',
        'rank.4' => 'required|numeric|min:0|max:99',
        'rank.5' => 'required|numeric|min:0|max:99'
    ];

    public function update($propertyName)
    {
        return $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        $user = Auth::user();

        // Execution doesn't reach here if validation fails.

        $user = Auth::user();

        if ($user->bids->count() > 0) {
            foreach(Bid::where('user_id', $user->id)->get() as $bid) $bid->delete();
        }

        for ($i = 1; $i <= 5; $i++) {
            Bid::create([
                'user_id' => $user->id,
                'number_id' => $this->rank[$i],
                'priority' => $i
            ]);
        }

        $this->emit('saved');
    }

}

