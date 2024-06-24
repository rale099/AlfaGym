<?php

namespace App\Livewire;

use App\Models\Tipos;
use Livewire\Component;

class TipoComponent extends Component
{
    public function render()
    {
        $tipos = Tipos::paginate(10);
        return view('livewire.tipo-component', compact('tipos'));
    }
}
/*

        
*/
