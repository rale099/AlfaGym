<?php

namespace App\Livewire;

use App\Models\ComentarioCliente;
use Livewire\Component;

class ComentarioComponent extends Component
{
    public function render()
    {
        $comentarios = ComentarioCliente:: paginate(10);
        return view('livewire.comentario-component', compact('comentarios'));
    }
}
