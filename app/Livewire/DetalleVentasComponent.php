<?php

namespace App\Livewire;

use App\Models\DetalleVenta;
use Livewire\Component;

class DetalleVentasComponent extends Component
{
    public function render()
    {
        $detalleVentas = DetalleVenta::paginate(10);
        return view('livewire.detalle-ventas-component', compact('detalleVentas'));
    }
}
