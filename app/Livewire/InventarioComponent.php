<?php

namespace App\Livewire;

use App\Models\Inventario;
use App\Models\ProductoServicio;
use Livewire\Component;

class InventarioComponent extends Component
{
    public function render()
    {
        $productos = ProductoServicio::with('inventarios')->paginate(10);
        return view('livewire.inventario-component', compact('productos'));
    }
}
