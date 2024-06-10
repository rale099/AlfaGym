<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Usuario;
use Livewire\Component;

class UsuarioComponent extends Component
{
    public function render()
    {
        $usuarios = User::with('membresias.producto_servicios')->paginate(10);
        return view('livewire.usuario-component', compact('usuarios'));
    }
}
