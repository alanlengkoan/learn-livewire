<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ShowDataTwo extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Created At', 'created_at')
                ->sortable()
                ->searchable(),
            Column::make('Updated At', 'updated_at')
                ->sortable()
                ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Data::query();
    }
}
