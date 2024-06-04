<?php

namespace App\Livewire;

use App\Models\Venta;
use Livewire\Component;

class VentaComponent extends Component
{
    public function render()
    {
        $ventas = Venta::paginate(10);
        return view('livewire.venta-component', compact('ventas'));
    }
}
