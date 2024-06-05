<?php

namespace App\Livewire;

use App\Models\Membresia;
use Livewire\Component;

class MembresiaComponent extends Component
{
    public function render()
    {
        $membresias = Membresia::paginate(10);
        return view('livewire.membresia-component', compact('membresias'));
    }
}
