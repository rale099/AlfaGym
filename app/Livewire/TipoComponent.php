<?php

namespace App\Livewire;

use App\Models\Tipo;
use Livewire\Component;

class TipoComponent extends Component
{
    public function render()
    {
        $tipos = Tipo::paginate(10);
        return view('livewire.tipo-component', compact('tipos'));
    }
}
/*

        
*/
