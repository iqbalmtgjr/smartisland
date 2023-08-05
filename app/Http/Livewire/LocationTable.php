<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

class LocationTable extends DataTableComponent
{
    protected $model = Location::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setDefaultSort('id', 'desc');
    }

    // public function builder(): Builder
    // {
    //     return Location::all();
    // }

    public function columns(): array
    {
        return [
            // Column::make("#", "id")
            //     ->sortable(),
            Column::make('Order', 'id')
                ->collapseOnMobile()
                ->excludeFromColumnSelect()
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
