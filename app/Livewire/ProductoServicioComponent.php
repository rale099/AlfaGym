<?php

namespace App\Livewire;

use App\Models\ProductoServicio;
use Livewire\Component;

class ProductoServicioComponent extends Component
{
    public function render()
    {
        $proSer = ProductoServicio::with('membresias')->paginate(10);
        return view('livewire.producto-servicio-component', compact('proSer'));
    }
}
