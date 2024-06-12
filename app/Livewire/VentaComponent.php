<?php

namespace App\Livewire;

use App\Models\DetalleVenta;
use App\Models\Venta;
use Livewire\Component;

class VentaComponent extends Component
{
    public $abrirDetalles = false;
    
    protected $listeners = ['verDetalles'];
    
    public function verDetalles()
    {
        $this->abrirDetalles = true;
    }

    public function cerrarDetalles()
    {
        $this->abrirDetalles = false;
    }

    public function mostrarDetalle()
    {
        
    }

    public function render()
    {
        $ventas = Venta::paginate(10);
        return view('livewire.venta-component', compact('ventas'));
    }
}
