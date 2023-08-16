<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;
use Livewire\WithFileUploads;

class MapPemetaan extends Component
{
    use WithFileUploads;
    public $nama_lokasi, $long, $lat, $deskripsi, $validator, $locationId;
    public $gambar = [];
    public $imageUrl;
    public $geoJson;

    private function loadLocations()
    {
        $locations = Location::orderBy('created_at', 'desc')->get();

        $customLocations = [];

        foreach ($locations as $location) {
            $customLocations[] = [
                'type' => 'Feature',
                'geometry' => [
                    'coordinates' => [$location->long, $location->lat],
                    'type' => 'Point'
                ],
                'properties' => [
                    'locationId' => $location->id,
                    'title' => $location->nama_lokasi,
                    'description' => $location->deskripsi,
                ]
            ];
        }

        $geoLocation = [
            'type' => 'FeatureCollection',
            'features' => $customLocations
        ];

        $geoJson = collect($geoLocation)->toJson();
        $this->geoJson = $geoJson;
    }

    public function render()
    {
        $this->loadLocations();
        return view('livewire.map-pemetaan');
    }

    public function findLocationById($id)
    {
        $location = Location::findOrFail($id);
        $this->locationId = $location->id;
        $this->nama_lokasi = $location->nama_lokasi;
        $this->long = $location->long;
        $this->lat = $location->lat;
        $this->deskripsi = $location->deskripsi;
        $this->imageUrl = $location->gambar->first()->nama_gambar;
    }
}
