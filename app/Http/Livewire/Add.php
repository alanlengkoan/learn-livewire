<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;

class Add extends Component
{
    public $nama;
    public $email;
    public $telepon;
    public $alamat;

    public function render()
    {
        return view('livewire.add');
    }

    public function save()
    {
        $this->validate([
            'nama'    => 'required',
            'email'   => 'required|email',
            'telepon' => 'required',
            'alamat'  => 'required',
        ]);

        $data = Data::create([
            'nama'    => $this->nama,
            'email'   => $this->email,
            'telepon' => $this->telepon,
            'alamat'  => $this->alamat,
        ]);

        $this->resetInput();

        $this->emit('dataSaveAdd', $data);
    }

    public function resetInput()
    {
        $this->nama    = null;
        $this->email   = null;
        $this->telepon = null;
        $this->alamat  = null;
    }
}
