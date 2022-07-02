<?php

namespace App\Http\Livewire;

use App\Models\Data as ModelsData;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Data extends Component
{
    public $updateStatus = false;

    protected $listeners = [
        'dataSavedAdd' => 'handleDataSavedAdd',
        'dataSavedUpd' => 'handleDataSavedUpd',
    ];

    // untuk view
    public function render()
    {
        $data = [
            'tampil' => ModelsData::orderBy('id', 'desc')->get(),
        ];
        return view('livewire.data', $data);
    }

    public function getData($id)
    {
        $this->updateStatus = true;
        $data = ModelsData::find($id);
        $this->emit('getData', $data);
    }

    public function delData($id)
    {
        if ($id) {
            $data = ModelsData::find($id);
            $data->delete();
            Session::flash('success', 'Data berhasil dihapus!'); 
        }
    }

    public function handleDataSavedAdd()
    {
        Session::flash('success', 'Data berhasil ditambahkan!');
    }

    public function handleDataSavedUpd()
    {
        $this->updateStatus = false;
        Session::flash('success', 'Data berhasil diubah!'); 
    }
}