<?php

namespace App\Livewire;

use App\Models\DetalleCompra;
use Livewire\Component;

class DetalleProductoComponent extends Component
{
    public function render()
    {
        $detaCom = DetalleCompra::paginate(10);
        return view('livewire.detalle-producto-component', compact('detaCom'));
    }
}
