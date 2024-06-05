<?php

namespace App\Livewire;

use App\Models\Sucursal;
use Livewire\Component;

class SucursalesComponent extends Component
{
    public function render()
    {
        $sucursales = Sucursal::paginate(10);
        return view('livewire.sucursales-component', compact('sucursales'));
    }
}
