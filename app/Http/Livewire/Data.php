<?php

namespace App\Http\Livewire;

use App\Models\Data as ModelsData;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Data extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'dataSaved' => 'handleDataSaved',
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
        $this->statusUpdate = true;
        $data = ModelsData::find($id);
        $this->emit('getData', $data);
    }

    public function handleDataSaved()
    {
        Session::flash('success', 'Data berhasil ditambahkan'); 
    }
}