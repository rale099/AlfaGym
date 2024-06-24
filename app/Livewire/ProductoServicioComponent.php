<?php

namespace App\Livewire;

use App\Models\ProductoServicio;
use App\Models\Tipos;
use Livewire\Component;

class ProductoServicioComponent extends Component
{
    public $modal = false;

    public function render()
    {
        $data['proSer'] = ProductoServicio::with('membresias','tipos')->paginate(10);
        $data['tipos']  = Tipos::all();
        return view('livewire.producto-servicio-component', $data);
        
    }

    public function abrirModal(){
        if ($this->modal == true) {
            $this->modal = false;
        } else {
            $this->modal = true;
        }
    }
}
