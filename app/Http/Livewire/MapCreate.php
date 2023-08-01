<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;

class MapCreate extends Component
{
    public $data;
    public $nama_lokasi;
    public $geojson;
    public $deskripsi;

    public function render()
    {
        return view('livewire.map-create');
    }

    public function store()
    {
        $location = Location::create([
            'nama_lokasi' => $this->nama_lokasi,
            'geojson' => $this->geojson,
            'deskripsi' => $this->deskripsi
        ]);

        $this->resetInput();

        $this->emit('mapStored', $location);
    }

    private function resetInput()
    {
        $this->nama_lokasi = null;
        $this->geojson = null;
        $this->deskripsi = null;
    }
}
