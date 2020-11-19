<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LogrosPacientes extends Component
{
    public $paciente = [];
    public function render()
    {
        return view('livewire.logros-pacientes');
    }
}
