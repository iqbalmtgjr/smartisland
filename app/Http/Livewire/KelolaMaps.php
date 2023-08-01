<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Livewire\Component;

class KelolaMaps extends Component
{
    public $data;

    protected $listeners = [
        'mapStored' => 'handleStored'
    ];

    public function render()
    {
        $this->data = Location::latest()->get();
        return view('livewire.kelola-maps');
    }

    public function handleStored($location)
    {
        // dd($mapp);
    }
}
