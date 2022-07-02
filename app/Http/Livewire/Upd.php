<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;

class Upd extends Component
{
    public $nama;
    public $email;
    public $telepon;
    public $alamat;

    protected $listeners = [
        'getData' => 'handleGetData',
    ];

    // untuk view
    public function render()
    {
        return view('livewire.upd');
    }

    public function save()
    {
        $this->validate([
            'nama'    => 'required',
            'email'   => 'required|email',
            'telepon' => 'required|numeric',
            'alamat'  => 'required',
        ]);

        $data = Data::find($this->id_data);
        $data->update([
            'nama'    => $this->nama,
            'email'   => $this->email,
            'telepon' => $this->telepon,
            'alamat'  => $this->alamat,
        ]);

        $this->resetInput();

        $this->emit('dataSavedUpd', $data);
    }

    public function handleGetData($data)
    {
        $this->nama    = $data['nama'];
        $this->email   = $data['email'];
        $this->telepon = $data['telepon'];
        $this->alamat  = $data['alamat'];
        $this->id_data = $data['id'];
    }

    public function resetInput()
    {
        $this->nama    = null;
        $this->email   = null;
        $this->telepon = null;
        $this->alamat  = null;
    }
}
