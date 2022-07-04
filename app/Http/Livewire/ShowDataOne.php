<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class ShowDataOne extends LivewireDatatable
{
    public $model = Data::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->label('ID')->defaultSort('asc')->sortBy('id'),
            Column::name('nama')->label('Nama'),
            Column::name('email')->label('Email'),
            Column::name('telepon')->label('Telepon'),
            Column::name('alamat')->label('Alamat'),
        ];
    }
}
