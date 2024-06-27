<?php

namespace App\Livewire;

use App\Models\Proveedor;
use Livewire\Component;

class ProveedorComponent extends Component
{
    public function render()
    {
        $proveedor = Proveedor::paginate(10);
        return view('livewire.proveedor-component', compact('proveedor'));
    }
}
