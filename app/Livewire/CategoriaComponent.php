<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class CategoriaComponent extends Component
{
    public function render()
    {
        $categorias = Categoria::paginate(10);
        return view('livewire.categoria-component', compact('categorias'));
    }
}
