<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class LocationTable extends DataTableComponent
{
    protected $model = Location::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
    }

    // public function builder(): Builder
    // {
    //     return Location::all();
    // }

    public function columns(): array
    {
        return [
            Column::make("#", "id")
                ->sortable(),
            Column::make("Nama Lokasi", "nama_lokasi")
                ->sortable()
                ->searchable(),
            Column::make("Geojson", "geojson")
                ->sortable(),
            Column::make("Deskripsi", "deskripsi")
                ->sortable(),
        ];
    }
}
