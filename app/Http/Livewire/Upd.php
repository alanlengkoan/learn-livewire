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

    public function render()
    {
        return view('livewire.upd');
    }

    public function save()
    {
        $this->validate([
            'nama'    => 'required',
            'email'   => 'required|email',
            'telepon' => 'required',
            'alamat'  => 'required',
        ]);

        dd($this->id);

        $data = Data::find($this->id);
        $data->update([
            'nama'    => $this->nama,
            'email'   => $this->email,
            'telepon' => $this->telepon,
            'alamat'  => $this->alamat,
        ]);

        $this->resetInput();

        $this->emit('dataSaved', $data);
    }

    public function handleGetData($data)
    {
        $this->nama    = $data['nama'];
        $this->email   = $data['email'];
        $this->telepon = $data['telepon'];
        $this->alamat  = $data['alamat'];
        $this->id      = $data['id'];
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->email = null;
        $this->telepon = null;
        $this->alamat = null;
    }
}
