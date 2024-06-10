<?php

namespace App\Livewire;

use App\Models\InventarioEquipo;
use Livewire\Component;

class InventarioEquipoComponent extends Component
{
    public function render()
    {
        $inveEquipos = InventarioEquipo::with('equipo')->paginate(10);
        return view('livewire.inventario-equipo-component', compact('inveEquipos'));
    }
}
