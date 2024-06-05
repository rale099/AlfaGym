<?php

namespace App\Livewire;

use App\Models\Horario;
use Livewire\Component;

class HorarioComponent extends Component
{
    public function render()
    {
        $horarios = Horario::paginate(10);
        return view('livewire.horario-component', compact('horarios'));
    }
}
