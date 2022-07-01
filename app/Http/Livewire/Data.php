<?php

namespace App\Http\Livewire;

use App\Models\Data as ModelsData;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Data extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'dataSaveAdd' => 'handleDataSaveAdd',
        'dataSaveUpd' => 'handleDataSaveUpd',
    ];

    public function render()
    {
        $data = [
            'tampil' => ModelsData::orderBy('id', 'desc')->get(),
        ];
        return view('livewire.data', $data);
    }

    public function getData($id)
    {
        $data = ModelsData::find($id);
        $this->emit('getData', $data);
    }

    public function delData($id)
    {
        $data = ModelsData::find($id);
        $data->delete();
    }

    // for handle insert data
    public function handleDataSaveAdd()
    {
        // Session::flash('success', 'Data berhasil ditambahkan');
        dd('Data berhasil ditambahkan');
    }

    // for handle update data
    public function handleDataSaveUpd()
    {
        // Session::flash('success', 'Data berhasil ditambahkan');
        dd('Data berhasil diubah');
    }
}