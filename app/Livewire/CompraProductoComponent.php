<?php

namespace App\Livewire;

use App\Models\CompraProducto;
use Livewire\Component;

class CompraProductoComponent extends Component
{
    public function render()
    {
        $compraPro = CompraProducto::paginate(10);
        return view('livewire.compra-producto-component', compact('compraPro'));
    }
}
