<?php

namespace App\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class EquipoComponent extends Component
{
    public function render()
    {
        $equipos = Equipo::paginate(10);
        return view('livewire.equipo-component', compact('equipos'));
    }
}
