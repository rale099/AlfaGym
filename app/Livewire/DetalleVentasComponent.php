<?php

namespace App\Livewire;

use App\Models\DetalleVenta;
use Livewire\Component;

class DetalleVentasComponent extends Component
{
    public function render()
    {
        $detalleVentas = DetalleVenta::with('producto_servicios')->paginate(10);
        dd($detalleVentas);
        return view('livewire.detalle-ventas-component', compact('detalleVentas'));
    }
}
