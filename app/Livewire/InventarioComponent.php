<?php

namespace App\Livewire;

use App\Models\Inventario;
use Livewire\Component;

class InventarioComponent extends Component
{
    public function render()
    {
        $inventarios = Inventario::paginate(10);
        return view('livewire.inventario-component', compact('inventarios'));
    }
}
