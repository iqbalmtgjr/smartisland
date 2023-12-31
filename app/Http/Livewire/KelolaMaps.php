<?php

namespace App\Http\Livewire;

use App\Models\Gambar;
use Livewire\Component;
use App\Models\Location;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class KelolaMaps extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $nama_lokasi, $longtitude, $lattitude, $deskripsi, $validator, $location_id;
    public $gambar = [];
    public $imageUrl;
    public $updateMode = false;
    public $paginate = 5;
    public $search;

    protected $listeners = [
        'mapStored' => 'handleStored'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.kelola-maps', [
            'locations' => $this->search === null ?
                Location::latest()->paginate($this->paginate) :
                Location::latest()->where('nama_lokasi', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }

    private function resetInput()
    {
        $this->nama_lokasi = '';
        $this->longtitude = '';
        $this->lattitude = '';
        $this->deskripsi = '';
        $this->gambar = null;
    }

    public function store()
    {
        // dd(request()->serverMemo['data']);
        $validator = $this->validate([
            'nama_lokasi' => 'required',
            'longtitude' => 'required',
            'lattitude' => 'required',
            'deskripsi' => 'required',
            'gambar.*' => 'image'
        ]);

        $location = Location::create([
            'nama_lokasi' => $this->nama_lokasi,
            'long' => $this->longtitude,
            'lat' => $this->lattitude,
            'deskripsi' => $this->deskripsi
        ]);

        if ($this->gambar != null) {
            foreach ($this->gambar as $file) {
                $filename = time() . rand(1, 200) . '.' . $file->extension();
                Storage::putFileAs('public/gambar', $file, $filename);

                Gambar::create([
                    'location_id' => $location->id,
                    'nama_gambar' => $filename
                ]);
            }
        }


        $this->resetInput();


        $this->emit('locationStore');
        $this->emit('mapStored', $location);
        $this->updatingSearch();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $location = Location::find($id);
        $this->location_id = $location->id;
        $this->nama_lokasi = $location->nama_lokasi;
        $this->longtitude = $location->long;
        $this->lattitude = $location->lat;
        $this->deskripsi = $location->deskripsi;
    }

    public function gambar($id)
    {
        $this->updateMode = false;
        $location = Gambar::where('location_id', $id);
    }

    public function update()
    {
        $validator = $this->validate([
            'nama_lokasi' => 'required',
            'longtitude' => 'required',
            'lattitude' => 'required',
            'deskripsi' => 'required',
            'gambar.*' => 'image'
        ]);

        if ($this->location_id) {
            $location = Location::find($this->location_id);
            $location->update([
                'nama_lokasi' => $this->nama_lokasi,
                'long' => $this->longtitude,
                'lat' => $this->lattitude,
                'deskripsi' => $this->deskripsi
            ]);

            //delete image lama
            // $gambar = Gambar::where('location_id', $location->id)->get();
            // foreach ($gambar as $value) {
            //     if ($value) {
            //         @unlink(public_path('storage/gambar/' . $value->nama_gambar));
            //     }
            // }

            // upload & create/update image baru
            if ($this->gambar) {
                foreach ($this->gambar as $file) {
                    $filename = time() . rand(1, 200) . '.' . $file->extension();
                    Storage::putFileAs('public/gambar', $file, $filename);

                    Gambar::updateOrCreate([
                        'location_id' => $location->id,
                        'nama_gambar' => $filename
                    ]);
                }
            }

            $this->updateMode = false;
            session()->flash('sukses', 'Data berhasil diedit!');
            $this->resetInput();
            $this->emit('locationUpdate');
            $this->updatingSearch();
        }
    }

    public function delete($id)
    {
        if ($id) {
            // hapus lokasi
            $location = Location::find($id);
            $location->delete();

            // hapus gambar
            $gambar = Gambar::where('location_id', $id)->get();
            if (!empty($gambar)) {
                foreach ($gambar as $file) {
                    @unlink(public_path('storage/gambar/' . $file->nama_gambar));
                }
            }
            foreach ($gambar as $value) {
                $value->delete();
            }
            session()->flash('sukses', 'Data berhasil dihapus!');
        }
    }

    public function handleStored($location)
    {
        session()->flash('sukses', 'Data berhasil diinput!');
    }
}
