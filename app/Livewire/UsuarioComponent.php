<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Usuario;
use Livewire\Component;

class UsuarioComponent extends Component
{
    public $addUsuario = false;
    
    protected $listeners = ['addUsuario'];
    
    public function verUsuario()
    {
        $this->addUsuario = true;
    }

    public function cerrarUsuario()
    {
        $this->addUsuario = false;
    }

    //

    public $deleteUsuario = false;
    
    protected $listener = ['deleteUsuario'];
    
    public function abrirDelete()
    {
        $this->deleteUsuario = true;
    }

    public function cerrarDelete()
    {
        $this->deleteUsuario = false;
    }
    
    public function render()
    {
        $usuarios = User::with('membresias.producto_servicios')->paginate(10);
        return view('livewire.usuario-component', compact('usuarios'));
    }
}
