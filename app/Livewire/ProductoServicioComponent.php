<?php

namespace App\Livewire;

use App\Models\ProductoServicio;
use Livewire\Component;

class ProductoServicioComponent extends Component
{
    public function render()
    {
        $proSer = ProductoServicio::paginate();
        return view('livewire.producto-servicio-component', compact('proSer'));
    }
}
