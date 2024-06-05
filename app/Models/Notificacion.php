<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificaciones';
    use HasFactory;
    public function usuarios(){
        return $this->belongsTo(Usuario::class);
    }
}
