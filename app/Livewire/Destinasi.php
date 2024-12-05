<?php

namespace App\Livewire;

use App\Models\Destinasi as ModelDestinasi;
use Livewire\Component;

class Destinasi extends Component
{
    public function render()
    {
        $destinasi = ModelDestinasi::all();
        return view('livewire.destinasi', ['destinasi' => $destinasi]);
    }
}
