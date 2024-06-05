<?php

namespace App\Livewire;

use App\Models\Notificacion;
use Livewire\Component;

class NotificacionComponent extends Component
{
    public function render()
    {
        $notificaciones = Notificacion:: paginate(10);
        return view('livewire.notificacion-component', compact ('notificaciones'));
    }
}
