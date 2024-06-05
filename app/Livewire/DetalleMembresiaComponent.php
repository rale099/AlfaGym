<?php

namespace App\Livewire;

use App\Models\DetalleMembresia;
use Livewire\Component;

class DetalleMembresiaComponent extends Component
{
    public function render()
    {
        $detalleMem = DetalleMembresia::class;
        return view('livewire.detalle-membresia-component', compact('detalleMem'));
    }
}
