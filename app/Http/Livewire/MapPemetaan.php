<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;

class MapPemetaan extends Component
{
    public function render()
    {
        return view('livewire.map-pemetaan', [
            'locations' =>
            Location::all()
        ]);
    }
}
