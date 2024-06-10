<?php

namespace App\Livewire;

use App\Models\ProductoServicio;
use Livewire\Component;

class ProductoServicioComponent extends Component
{
    public $modal = false;

    public function render()
    {
        $proSer = ProductoServicio::paginate();
        return view('livewire.producto-servicio-component', compact('proSer'));
        
    }

    public function abrirModal(){
        if ($this->modal == true) {
            $this->modal = false;
        } else {
            $this->modal = true;
        }
    }
}
