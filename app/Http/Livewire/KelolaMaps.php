<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;

class KelolaMaps extends Component
{
    public $data, $nama_lokasi, $geojson, $deskripsi, $validator, $location_id;
    public $updateMode = false;

    protected $listeners = [
        'mapStored' => 'handleStored'
    ];

    public function render()
    {
        $this->data = Location::latest()->get();
        return view('livewire.kelola-maps');
    }

    private function resetInput()
    {
        $this->nama_lokasi = null;
        $this->geojson = null;
        $this->deskripsi = null;
    }

    public function store()
    {
        // dd(request()->serverMemo['data']);
        $validator = $this->validate([
            'nama_lokasi' => 'required',
            'geojson' => 'required',
            'deskripsi' => 'required'
        ]);

        $location = Location::create([
            'nama_lokasi' => $this->nama_lokasi,
            'geojson' => $this->geojson,
            'deskripsi' => $this->deskripsi
        ]);

        $this->resetInput();

        $this->emit('locationStore');
        $this->emit('mapStored', $location);
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $location = Location::find($id);
        $this->location_id = $location->id;
        $this->nama_lokasi = $location->nama_lokasi;
        $this->geojson = $location->geojson;
        $this->deskripsi = $location->deskripsi;
    }

    public function update()
    {
        // dd($this->id);
        $validator = $this->validate([
            'nama_lokasi' => 'required',
            'geojson' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($this->location_id) {
            $location = Location::find($this->location_id);
            $location->update([
                'nama_lokasi' => $this->nama_lokasi,
                'geojson' => $this->geojson,
                'deskripsi' => $this->deskripsi
            ]);
            $this->updateMode = false;
            session()->flash('sukses', 'Data berhasil diedit!');
            $this->resetInput();
            $this->emit('locationUpdate');
        }
    }

    public function delete($id)
    {
        if ($id) {
            Location::find($id)->delete();
            session()->flash('sukses', 'Data berhasil dihapus!');
        }
    }

    public function handleStored($location)
    {
        // dd($mapp);
        session()->flash('sukses', 'Data berhasil diinput!');
    }
}
